@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
<h1>Nuevo Prestador</h1>
@stop

@extends('adminlte::page')

@section('title', 'Nuevo Prestador')

@section('content_header')
<h1>Nuevo Prestador</h1>
@stop

@section('content')

<div class="card">
    <div class="card-body">

        <form method="POST" action="{{ route('providers') }}">
            @csrf

            {{-- Nombre --}}
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input name="name" class="form-control" required>
            </div>

            {{-- Tipo --}}
            <div class="mb-3">
                <label class="form-label">Tipo de prestador</label>
                <select name="provider_type_id" class="form-control" required>
                    @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
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
                    <input id="address" name="address" class="form-control">
                </div>

                <div class="col-md-3 mb-3">
                    <label>Ciudad</label>
                    <input id="city" name="city" class="form-control">
                </div>

                <div class="col-md-3 mb-3">
                    <label>Provincia</label>
                    <input id="province" name="province" class="form-control">
                </div>
            </div>

            {{-- Botón buscar --}}
            <button type="button" class="btn btn-secondary mb-3" onclick="searchAddress()">
                Buscar en el mapa
            </button>

            {{-- Mapa --}}
            <div id="map" style="height: 400px;" class="mb-3"></div>

            {{-- Lat/Lng --}}
            <div class="row">
                <div class="col-md-6">
                    <label>Latitud</label>
                    <input id="lat" name="lat" class="form-control" readonly>
                </div>
                <div class="col-md-6">
                    <label>Longitud</label>
                    <input id="lng" name="lng" class="form-control" readonly>
                </div>
            </div>

            <hr>

            {{-- Contacto --}}
            <div class="row">
                <div class="col-md-6">
                    <label>Teléfono</label>
                    <input name="phone" class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control">
                </div>
            </div>

            <div class="mt-4">
                <button class="btn btn-primary">
                    Guardar Prestador
                </button>
            </div>

        </form>
    </div>
</div>

@stop


@section('css')

@stop

@section('js')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4VSFCpvON_mjZdV81Fk7MMYVSXxhDXA0&libraries=places">
</script>

<script>
    let map;
    let marker;
    let geocoder;

    function initMap() {
        const center = {
            lat: -34.6037,
            lng: -58.3816
        }; // Buenos Aires

        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center
        });

        geocoder = new google.maps.Geocoder();

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
                placeMarker(results[0].geometry.location);
            } else {
                alert('No se pudo encontrar la dirección');
            }
        });
    }

    window.onload = initMap;
</script>
@stop