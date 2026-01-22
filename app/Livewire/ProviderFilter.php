<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Provider;
use App\Models\ProviderType;
use App\Models\Specialty;
use App\Models\Plan;
use Illuminate\Support\Facades\Http;

class ProviderFilter extends Component
{
    public $providerType = null;
    public $specialty = null;
    public $name = '';
    public $city = '';
    public string $citySearch = '';
    public array $cityResults = [];
    public $lat = null;
    public $lng = null;
    public $planId = null;

    public function mount()
    {
        $this->cityResults = [];
    }

    public function resetFilters()
    {
        $this->providerType = null;
        $this->specialty = null;
        $this->name = '';
        $this->city = '';
        $this->citySearch = '';
        $this->lat = null;
        $this->lng = null;
        $this->planId = null;
    }

    public function updated($property, $value)
    {

        if ($property === 'citySearch') {
            $this->updateCitySearch($value);
        }
    }
    public function updateCitySearch($value)
    {
        if (strlen($this->citySearch) < 3) {
            $this->cityResults = [];
            return;
        }

        $response = Http::withHeaders([
            'User-Agent' => 'Laravel Livewire Provider Search'
        ])->get('https://nominatim.openstreetmap.org/search', [
            'q' => $this->citySearch,
            'countrycodes' => 'ar',
            'format' => 'json',
            'limit' => 5,
        ]);

        $this->cityResults = collect($response->json() ?? [])
            ->map(function ($item) {
                return [
                    'label' => $this->shortCityName($item),
                    'lat' => $item['lat'],
                    'lon' => $item['lon'],
                ];
            })
            ->toArray();
    }

    private function shortCityName(array $item): string
    {
        $parts = explode(',', $item['display_name']);

        $city = trim($parts[0] ?? '');
        $province = trim($parts[count($parts) - 3] ?? '');

        return $province
            ? "{$city}, {$province}"
            : $city;
    }


    public function selectCity($lat, $lng, $label)
    {
        $this->lat = $lat;
        $this->lng = $lng;

        $this->citySearch = $label;   // ← esto llena el input
        $this->cityResults = [];      // ← esto cierra el dropdown
    }

    public function render()
    {

        $providers = Provider::query()
            ->where('active', true)
            ->with(['type', 'specialties'])

            ->when(
                $this->providerType,
                fn($q) =>
                $q->where('provider_type_id', $this->providerType)
            )

            ->when(
                $this->specialty,
                fn($q) =>
                $q->whereHas(
                    'specialties',
                    fn($sq) =>
                    $sq->where('specialties.id', $this->specialty)
                )
            )

            ->when($this->planId, function ($q) {
                $q->whereHas('plans', function ($sq) {
                    $sq->where('plans.id', $this->planId);
                });
            })

            ->when(
                $this->name,
                fn($q) =>
                $q->where('name', 'like', "%{$this->name}%")
            )


            ->when($this->lat && $this->lng, function ($q) {
                $this->applyDistanceFilter($q);
            })

            ->get();


        $this->dispatch('update-markers', providers: $providers->map(fn($p) => [
            'id' => $p->id,
            'name' => $p->name,
            'lat' => $p->lat,
            'lng' => $p->lng,
        ]));

        return view('livewire.provider-filter', [
            'providers' => $providers,
            'types' => ProviderType::orderBy('name')->get(),
            'specialties' => Specialty::orderBy('name')->get(),
            'plans' => Plan::orderBy('name')->get(),
        ]);
    }


    protected function applyDistanceFilter($query)
    {
        $lat = $this->lat;
        $lng = $this->lng;

        // radio en KM (podés hacerlo configurable)
        $radius = 30;

        $query
            ->selectRaw(
                "providers.*,
            ( 6371 * acos(
                cos(radians(?)) *
                cos(radians(lat)) *
                cos(radians(lng) - radians(?)) +
                sin(radians(?)) *
                sin(radians(lat))
            )) AS distance",
                [$lat, $lng, $lat]
            )
            ->having('distance', '<=', $radius)
            ->orderBy('distance');
    }
}
