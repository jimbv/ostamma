<div>
    <div class="card mb-3">
        <div class="card-body">
            <div class="row g-2 mb-2">

                {{-- Fila 1 --}}
                <div class="col-md-4">
                    <select class="form-select" wire:model="providerType">
                        <option value="">Categoría</option>
                        @foreach($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <select class="form-select" wire:model="specialty">
                        <option value="">Especialidad</option>
                        @foreach($specialties as $spec)
                        <option value="{{ $spec->id }}">{{ $spec->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <select class="form-select" wire:model="planId">
                        <option value="">Plan</option>
                        @foreach($plans as $plan)
                        <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="row g-2">

                {{-- Fila 2 --}}
                <div class="col-md-4">
                    <input
                        type="text"
                        class="form-control"
                        wire:model.debounce.500ms="name"
                        placeholder="Nombre del prestador">
                </div>

                <div class="col-md-4 position-relative">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Ciudad"
                        wire:model.live="citySearch">

                    @if(!empty($cityResults))
                    <ul class="list-group position-absolute w-100 shadow" style="z-index: 1000">
                        @foreach($cityResults as $city)
                        <li
                            class="list-group-item list-group-item-action"
                            wire:click="selectCity('{{ $city['lat'] }}', '{{ $city['lon'] }}', '{{ $city['label'] }}')">
                            {{ $city['label'] }}
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </div>

                <div class="col-md-4 d-grid">
                    <button class="btn btn-primary" wire:click="resetFilters">
                        Limpiar filtros
                    </button>
                </div>

            </div>

        </div>
    </div>

    {{-- Resultados --}}
    <div class="row">

        {{-- LISTADO --}}
        <div class="col-md-4" style="max-height: 75vh; overflow-y: auto">
            @forelse($providers as $provider)
            <div class="card mb-2 shadow-sm">
                <div class="card-body p-2">
                    <h6 class="mb-1 fw-bold">
                        {{ $provider->name }}
                    </h6>

                    <div class="small text-muted">
                        {{ $provider->address }}<br>
                        {{ $provider->city }} - {{ $provider->province }}
                    </div>

                    <div class="mt-1 small">
                        📞 {{ $provider->phone ?? '—' }}<br>
                        ✉️ {{ $provider->email ?? '—' }}
                    </div>

                    <button
                        class="btn btn-sm btn-outline-primary mt-2"
                        onclick="focusMarker({{ $provider->id }})">
                        Ver en mapa
                    </button>
                </div>
            </div>
            @empty
            <div class="alert alert-info">
                No se encontraron profesionales
            </div>
            @endforelse
        </div>

        {{-- MAPA --}}
        <div class="col-md-8" wire:ignore.self>
            <div id="map"  
            style="width:100%; height:65vh; border-radius:8px;"></div>
        </div>

    </div>

    <script>
let map;
let markers = {};

function initMap() {
    if (window.mapInitialized) return;

    window.mapInitialized = true;

    map = new google.maps.Map(document.getElementById("map"), {
        center: { lat: -34.6037, lng: -58.3816 },
        zoom: 6,
    });
}
 

</script>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4VSFCpvON_mjZdV81Fk7MMYVSXxhDXA0&callback=initMap"
  async
  defer>
</script>


<script>
document.addEventListener('livewire:init', () => {
    Livewire.on('update-markers', data => {
        clearMarkers();

        data.providers.forEach(p => {
            if (p.lat && p.lng) {
                addMarker(p.id, Number(p.lat), Number(p.lng), p.name);
            }
        });
    });
});

function clearMarkers() {
    Object.values(markers).forEach(marker => marker.setMap(null));
    markers = {};
}

function addMarker(id, lat, lng, name) {
    const marker = new google.maps.Marker({
        position: { lat, lng },
        map,
        title: name,
    });

    markers[id] = marker;
}
</script>

</div>