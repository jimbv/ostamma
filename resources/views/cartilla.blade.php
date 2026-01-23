@extends('layouts.plantilla')
@section('contenido')
<section class="bg-white">
    <div class="max-w-screen-xl mx-auto px-5 py-10">
        <h2 class="text-2xl md:text-3xl font-black text-primary uppercase text-center mb-4 pt-3"
            style="font-family: Nunito;">
            Cartilla de prestadores
        </h2>

        <div class="text-center mb-5">
            <a href="/prestadores.xls"
                class="btn btn-primary me-2"
                style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
                target="_blank">
                <i class="fa-solid fa-file-excel me-1"></i>
                Descargar cartilla (Excel)
            </a>

            <a href="/SSS.pdf"
                class="btn btn-primary ms-2"
                style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
                target="_blank">
                <i class="fa-solid fa-file-pdf me-1"></i>
                Disposición DI-2025-111698318-APN-GCP#SSS
            </a>
        </div>


        <div class="row">
            <div class="col-12">
                @livewire('provider-filter')
            </div>

        </div>
</section>
@endsection
 
@section('scripts') 
@livewireScripts
@stop
@section('styles')
@livewireStyles
@stop