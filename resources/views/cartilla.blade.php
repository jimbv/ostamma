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

    <a href="/DI-2025-111698318-APN-GCP#SSS.pdf"
       class="btn btn-primary ms-2"
       style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
       target="_blank">
        <i class="fa-solid fa-file-pdf me-1"></i>
        Disposición DI-2025-111698318-APN-GCP#SSS
    </a>
</div>




        <div class="row">
            <form id="searchForm">
                <select name="type_id">
                    <option value="">Tipo</option>
                    @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>

                <input type="text" name="specialty" id="specialty">
                <input type="text" name="name">
                <input type="text" name="location" id="location">
            </form>

            <div class="row mt-4">
                <div class="col-md-4" id="results"></div>
                <div class="col-md-8">
                    <div id="map" style="height: 500px;"></div>
                </div>
            </div>

        </div>
</section>
@endsection

<div class="social-fixed d-flex flex-column">
    <a href="https://wa.me/5493534066579?text=Hola,%20acabo%20de%20visitar%20su%20pagina%20web%20y%20queria%20pedir%20mas%20informacion%20sobre%20sus%20productos%20y%20servicios" target="_blank" class="btn btn-success mb-2">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/clickcomunicacion.vm" target="_blank" class="btn btn-light mb-2" style="background-color:#E1306C; color:white;border-color:#E1306C;">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="mailto:info@clickcomunicacion.com.ar" target="_blank" class="  mb-2 btn btn-primary">
        <i class="fa-solid fa-envelope"></i>
    </a>
    <a href="/contacto" target="_blank" class="btn btn-light">
        <i class="fa-solid fa-map-marker-alt"></i>
    </a>
</div>

<style>
    .social-fixed {
        position: fixed;
        right: 20px;
        top: 40%;
        z-index: 9999;
    }

    .social-fixed a {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    }
</style>