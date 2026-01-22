@extends('layouts.plantilla')
@section('contenido')

<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Descarga la APP de OSTAMMA </h1>
                    <p class="lead fw-normal text-muted mb-5">Ten al alcance de tus manos toda la informacion que necesitas</p>
                    <div class="d-flex flex-column flex-lg-row align-items-center">
                        <img class="me-lg-3 mb-4 mb-lg-0" src="/plantilla/assets/images/descarga.png" alt="">
                        <a href="/OSTAMMAAPP.apk"
                            class="btn btn-primary me-lg-3 mb-4 mb-lg-0"
                            style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;"
                            download="OSTAMMAAPP">

                            <i class="fa-solid fa-download me-1"></i>
                            Descargar APP
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">

                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <!-- PUT CONTENTS HERE:-->
                                <!-- * * This can be a video, image, or just about anything else.-->
                                <!-- * * Set the max width of your media to 100% and the height to-->
                                <!-- * * 100% like the demo example below.-->
                                <img style="max-width: 100%; height: 100%" src="/ostammaphone.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section id="features">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-2 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-2">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi bi-cloud-arrow-down icon-feature  d-block mb-2"></i>
                                <h3 class="font-alt">Descarga</h3>
                                <p class="text-muted mb-0">Aprieta sobre el texto Descargar.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi bi-file-earmark-zip icon-feature  d-block mb-2 ;"></i>
                                <h3 class="font-alt">Archivo</h3>
                                <p class="text-muted mb-0">Se desplegará un aviso emergente, el cual le mostrará el archivo descargado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi bi-shield-lock icon-feature  d-block mb-2"></i>
                                <h3 class="font-alt">Permisos</h3>
                                <p class="text-muted mb-0">Para instalar la APP tendrá que habilitar la opción "permitir instalar aplicaciones desconocidas".</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi bi-check-circle icon-feature  d-block mb-2"></i>
                                <h3 class="font-alt">Instalación</h3>
                                <p class="text-muted mb-0">Ejecutar el archivo y aprieta en instalar, cuando acabe el proceso ya podrá utilizar la APP.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">

                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <video muted="" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                    <source src="/appvid.mp4" type="video/mp4">
                                </video>
                                <!--    <img style="max-width: 100%; height: 100%"  src="/plantilla/assets/images/prueba.jpeg" alt="">   -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<div class="social-fixed d-flex flex-column">
    <a href="https://wa.me/5493535629113?text=Hola,%20acabo%20de%20visitar%20su%20pagina%20web%20y%20queria%20pedir%20mas%20informacion%20sobre%20sus%20productos%20y%20servicios" target="_blank" class="btn btn-success mb-2">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="https://www.instagram.com/ostamma.salud" target="_blank" class="btn btn-light mb-2" style="background-color:#E1306C; color:white;border-color:#E1306C;">
        <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="mailto:info@ostamma.org.ar" target="_blank" class="  mb-2 btn btn-primary">
        <i class="fa-solid fa-envelope"></i>
    </a>
    <a href="/contacto" class="btn btn-light">
        <i class="fa-solid fa-map-marker-alt"></i>
    </a>
</div>

<style>
    .icon-feature {
        font-size: 2rem;
    }


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