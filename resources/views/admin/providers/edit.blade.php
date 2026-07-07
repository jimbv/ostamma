@extends('adminlte::page')

@section('title', 'Editar Prestador')

@section('content_header')
<h1>Editar Prestador</h1>
@stop

@section('content')
@php
    $selectedSpecialties = $provider->specialties->pluck('id')->toArray();
@endphp
<div class="card">
    <div class="card-body">

        <form method="POST" action="{{ route('providers.update', $provider) }}">
            @csrf
            @method('PUT')

            {{-- Nombre --}}
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input name="name" class="form-control"
                    value="{{ old('name', $provider->name) }}" required>
            </div>

            {{-- Tipo --}}
            <div class="mb-3">
                <label class="form-label">Tipo de prestador</label>
                <select name="provider_type_id" class="form-control" required>
                    @foreach($types as $type)
                    <option value="{{ $type->id }}"
                        @selected($provider->provider_type_id == $type->id)>
                        {{ $type->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            {{-- Planes --}}
            <div class="mb-3">
                <label class="form-label">Planes</label>

                @foreach($plans as $plan)
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="plans[]"
                        value="{{ $plan->id }}"
                        @checked(isset($provider) && $provider->plans->contains($plan->id))
                    >
                    <label class="form-check-label">
                        {{ $plan->name }}
                    </label>
                </div>
                @endforeach
            </div>

            {{-- Dirección --}}
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Dirección</label>
                    <input id="address" name="address" class="form-control"
                        value="{{ old('address', $provider->address) }}">
                </div>

                <div class="col-md-3 mb-3">
                    <label>Ciudad</label>
                    <input id="city" name="city" class="form-control"
                        value="{{ old('city', $provider->city) }}">
                </div>

                <div class="col-md-3 mb-3">
                    <label>Provincia</label>
                    <input id="province" name="province" class="form-control"
                        value="{{ old('province', $provider->province) }}">
                </div>
            </div>

            <button type="button" class="btn btn-secondary mb-3" onclick="searchAddress()">
                Buscar en el mapa
            </button>

            <div id="map" style="height: 400px;" class="mb-3"></div>

            {{-- Lat/Lng --}}
            <div class="row">
                <div class="col-md-6">
                    <label>Latitud</label>
                    <input id="lat" name="lat" class="form-control"
                        value="{{ old('lat', $provider->lat) }}" readonly>
                </div>
                <div class="col-md-6">
                    <label>Longitud</label>
                    <input id="lng" name="lng" class="form-control"
                        value="{{ old('lng', $provider->lng) }}" readonly>
                </div>
            </div>

            <hr>

            {{-- Contacto --}}
            <div class="row">
                <div class="col-md-6">
                    <label>Teléfono</label>
                    <input name="phone" class="form-control"
                        value="{{ old('phone', $provider->phone) }}">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control"
                        value="{{ old('email', $provider->email) }}">
                </div>
            </div>

            <div class="row mt-4">

                {{-- DISPONIBLES --}}
                <div class="col-md-5">
                    <label class="form-label">Especialidades disponibles</label>

                    <select id="available" class="form-control" multiple size="10">

                        @foreach($specialties as $specialty)

                        @if(!in_array($specialty->id, $selectedSpecialties))

                        <option value="{{ $specialty->id }}">
                            {{ $specialty->name }}
                        </option>

                        @endif

                        @endforeach

                    </select>
                </div>

                {{-- BOTONES --}}
                <div class="col-md-2 d-flex flex-column justify-content-center align-items-center">

                    <button type="button" class="btn btn-success mb-2" onclick="addSpecialty()">→</button>

                    <button type="button" class="btn btn-danger" onclick="removeSpecialty()">←</button>

                </div>

                {{-- SELECCIONADAS --}}
                <div class="col-md-5">

                    <label class="form-label">Especialidades del prestador</label>

                    <select id="selected" name="specialties[]" class="form-control" multiple size="10">

                        @foreach($specialties as $specialty)

                        @if(in_array($specialty->id, $selectedSpecialties))

                        <option value="{{ $specialty->id }}">
                            {{ $specialty->name }}
                        </option>

                        @endif

                        @endforeach

                    </select>

                </div>

            </div>

            <div class="mt-4">
                <button class="btn btn-primary">
                    Actualizar Prestador
                </button>
            </div>

        </form>
    </div>
</div>


@stop


@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@stop

@section('js')
<script
    src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google.maps_api_key') }}">
</script>

<script>
    let map;
    let marker;
    let geocoder;

    function initMap() {

        const lat = {{ $provider->lat ?? -34.6037 }};
        const lng = {{ $provider->lng ?? -58.3816 }};
        const center = { lat: lat, lng: lng };

        map = new google.maps.Map(document.getElementById("map"), {
            zoom: {{ $provider->lat ? 14 : 6 }},
            center
        });

        geocoder = new google.maps.Geocoder();

        if (lat && lng) {
            placeMarker(center);
        }

        map.addListener("click", (e) => {
            placeMarker(e.latLng);
        });
    }

    function placeMarker(location) {
        if (marker) marker.setMap(null);

        marker = new google.maps.Marker({
            position: location,
            map: map
        });

        document.getElementById('lat').value = location.lat();
        document.getElementById('lng').value = location.lng();
    }

    function searchAddress() {
        const address = [
            document.getElementById('address').value,
            document.getElementById('city').value,
            document.getElementById('province').value,
            'Argentina'
        ].join(', ');

        geocoder.geocode({
            address
        }, (results, status) => {
            if (status === 'OK') {
                map.setCenter(results[0].geometry.location);
                map.setZoom(15);
                placeMarker(results[0].geometry.location);
            } else {
                alert('No se pudo encontrar la dirección');
            }
        });
    }

    window.onload = initMap;
</script>


<script>

function addSpecialty() {

    let available = document.getElementById('available');
    let selected = document.getElementById('selected');

    Array.from(available.selectedOptions).forEach(option => {
        selected.appendChild(option);
    });

}

function removeSpecialty() {

    let available = document.getElementById('available');
    let selected = document.getElementById('selected');

    Array.from(selected.selectedOptions).forEach(option => {
        available.appendChild(option);
    });

}

document.querySelector("form").addEventListener("submit", function() {

    let selected = document.getElementById('selected');

    Array.from(selected.options).forEach(option => {
        option.selected = true;
    });

});

</script>
@stop