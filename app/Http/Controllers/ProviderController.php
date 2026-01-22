<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use App\Models\ProviderType;
use App\Models\Specialty;
use App\Models\Plan;
use Illuminate\Http\Request;


class ProviderController extends Controller
{
    public function cartilla()
    {
        $especialidades = Specialty::select('name', 'slug')->orderBy('name')->get();
        $types = ProviderType::all();
        $categorias = ProviderType::orderBy('name')->get();
        return view('cartilla', compact('categorias', 'especialidades', 'types'));
    }

    public function index(Request $request)
    {
        $providers = Provider::query()
            ->where('active', true)
            ->with(['providerType', 'specialties', 'plans'])

            ->when(
                $request->provider_type_id,
                fn($q) =>
                $q->where('provider_type_id', $request->provider_type_id)
            )

            ->when(
                $request->specialty_id,
                fn($q) =>
                $q->whereHas(
                    'specialties',
                    fn($s) =>
                    $s->where('specialties.id', $request->specialty_id)
                )
            )

            ->when(
                $request->plan_id,
                fn($q) =>
                $q->whereHas(
                    'plans',
                    fn($p) =>
                    $p->where('plans.id', $request->plan_id)
                )
            )

            ->when(
                $request->name,
                fn($q) =>
                $q->where('name', 'like', "%{$request->name}%")
            )

            ->when($request->lat && $request->lng, function ($q) use ($request) {
                $q->selectRaw("
                providers.*,
                (
                    6371 * acos(
                        cos(radians(?)) *
                        cos(radians(lat)) *
                        cos(radians(lng) - radians(?)) +
                        sin(radians(?)) *
                        sin(radians(lat))
                    )
                ) AS distance
            ", [$request->lat, $request->lng, $request->lat])
                    ->having('distance', '<=', 30)
                    ->orderBy('distance');
            })

            ->get();

        return view('cartilla', compact(
            'providers',
            'types',
            'specialties',
            'plans'
        ));
    }
}
