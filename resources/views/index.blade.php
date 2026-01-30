@extends('layouts.plantilla')
@section('contenido')
<section class="position-relative w-100"
    style="height: 100vh; border-bottom: 10px solid #0097ce; overflow:hidden;">

    <!-- Imagen de fondo -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: url('/imgs/fondo.png') center center / cover no-repeat;
               z-index:0;">
    </div>

    <!-- Overlay negro -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: rgba(0,0,0,0.6); z-index:1;">
    </div>

    <!-- Cuadro de texto centrado -->
    <div class="position-absolute top-50 start-50 translate-middle"
        style="z-index:2; width:90%; max-width:600px;">
        <div style="background: rgba(0,0,0,0.6); color: white; padding: 0.5rem 1rem; 
                    text-align:center; box-shadow:none;">
            <h1 class="h1 fw-bold mb-0"
                style="font-family: Nunito; 
                       text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                Consultá por los mejores planes para tu grupo familiar
            </h1>
        </div>
    </div>

</section>

<section id="productos" class="bg-white">
    <div class="max-w-screen-xl mx-auto px-5 py-10">
        <a href="/contacto">
            <img src="/imgs/AfiliateOSTAMMA.jpg" alt="Afiliate" style="border-radius:15px;" />
        </a>
        <p></p>
        <a href="/page/virtual">
            <img src="SaludVirtual.jpg" alt="Amma Salud Virtual" style="width:100%;border-radius:15px;overflow:hidden;box-shadow:0px 0px 2px white;border:none;" class="img-fluid mx-auto d-block">
        </a>

        <div id="plan" class="container my-5">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="section-title">
                        <h1 id="titulop">PLANES</h1>
                        <h2 class="fs-5 fw-normal" style="font-family: 'Roboto', sans-serif;">
                            Nuestros planes de salud brindan una amplia cobertura. Con tu aporte mensual o con un pago adicional fijo,
                            ideales para grupos familiares o personas que buscan una buena cobertura social al mejor precio.
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center bg-white rounded-4 py-4">

                <!-- PLAN JOVEN -->
                <div class="col-lg-4 col-md-6 col-sm-10 text-center mb-4">
                    <a href="/planjoven" class="d-block">
                        <img src="/imgs/joven.png" alt="Plan Joven" class="img-fluid mx-auto">
                    </a>
                </div>

                <!-- PLAN CLASICO -->
                <div class="col-lg-4 col-md-6 col-sm-10 text-center mb-4">
                    <a href="/planclasico" class="d-block">
                        <img src="/imgs/clasico.png" alt="Plan Clásico" class="img-fluid mx-auto">
                    </a>
                </div>

                <!-- PLAN SUPERIOR -->
                <div class="col-lg-4 col-md-6 col-sm-10 text-center mb-4">
                    <a href="/plansuperior" class="d-block">
                        <img src="/imgs/superior.png" alt="Plan Superior" class="img-fluid mx-auto">
                    </a>
                </div>

            </div>
        </div>

</section>
{{-- NOVEDADES --}}
<section class="mb-5 bg-light py-5">
    <div class="container">

        <h2 class="pt-3 fs-2 fw-bold text-uppercase text-center mb-4" style="color:#111;">
            NOVEDADES
        </h2>

        <div id="postsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach($posts->chunk(3) as $chunk)
                <div class="carousel-item @if($loop->first) active @endif">
                    <div class="row g-4 justify-content-center">


                        @if ($posts->count() <= 3)

                            {{-- SIN CAROUSEL --}}
                            <div class="row g-4 justify-content-center">
                            @foreach($posts as $post)
                            <div class="col-md-4">
                                <div class="card h-100 shadow-sm border-0">
                                    <a href="/novedad/{{ $post->slug }}" class="text-decoration-none text-dark">
                                        @if($post->images->isNotEmpty())
                                        <img src="{{ asset($post->images->first()->image_path) }}"
                                            class="card-img-top"
                                            alt="{{ $post->images->first()->alt_text ?? $post->title }}">
                                        @else
                                        <img src="https://via.placeholder.com/600x400?text=Sin+Imagen"
                                            class="card-img-top"
                                            alt="{{ $post->title }}">
                                        @endif
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">
                                            {!! Str::limit($post->short_text, 100) !!}
                                        </p>

                                        <a href="{{ url('/novedad/'.$post->slug) }}"
                                            class="btn btn-primary btn-sm mt-auto align-self-start">
                                            Leer más
                                        </a>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                    </div>

                    @else

                    {{-- CON CAROUSEL --}}
                    <div id="postsCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            @foreach($posts->chunk(3) as $chunk)
                            <div class="carousel-item @if($loop->first) active @endif">
                                <div class="row g-4 justify-content-center">

                                    @foreach($chunk as $post)
                                    <div class="col-md-4">
                                        <div class="card h-100 shadow-sm border-0">
                                            <a href="/novedad/{{ $post->slug }}" class="text-decoration-none text-dark">
                                                @if($post->images->isNotEmpty())
                                                <img src="{{ asset($post->images->first()->image_path) }}"
                                                    class="card-img-top"
                                                    alt="{{ $post->images->first()->alt_text ?? $post->title }}">
                                                @else
                                                <img src="https://via.placeholder.com/600x400?text=Sin+Imagen"
                                                    class="card-img-top"
                                                    alt="{{ $post->title }}">
                                                @endif
                                            </a>

                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <p class="card-text">
                                                    {!! Str::limit($post->short_text, 100) !!}
                                                </p>

                                                <a href="{{ url('/novedad/'.$post->slug) }}"
                                                    class="btn btn-primary btn-sm mt-auto align-self-start">
                                                    Leer más
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            @endforeach

                        </div>

                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#postsCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button"
                            data-bs-target="#postsCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>

                    @endif


                     

                </div>
            </div>
            @endforeach

        </div>

        {{-- Controles --}}
        @if($posts->count() > 3)
        <button class="carousel-control-prev" type="button"
            data-bs-target="#postsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button"
            data-bs-target="#postsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        @endif
    </div>

    </div>
</section>

{{-- APP / AUTOGESTIÓN --}}
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-7 col-sm-9 mb-4">
                <a href="/downloadapp">
                    <img src="/app.png" class="img-fluid mx-auto d-block" alt="APP OSTAMMA">
                </a>
            </div>

            <div class="col-lg-6 col-md-7 col-sm-9 mb-4">
                <a href="https://autogestion.ostamma.org.ar/">
                    <img src="/autogestionnew.png" class="img-fluid mx-auto d-block" alt="Autogestion OSTAMMA">
                </a>
            </div>

        </div>
    </div>
</section>

{{-- CONTACTO --}}
<section class="contact-section text-center">
    <div class="container">

        <a href="https://ostamma.org.ar/" class="d-block mb-4 text-decoration-none">
            <img src="/imgs/Blanco.png"
                alt="OSTAMMA AMMA Salud"
                class="logo-principal img-fluid mx-auto d-block">
            <h1 class="rnos">RNOS 0-0270-9</h1>
        </a>

        <p class="telefono-principal">
            <svg class="icono-phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor"
                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
            </svg>
            0800-777-2662
        </p>

        <p class="direccion">
            Gdor. Sabattini 93, Villa María, Córdoba <br>
            0353-4536925 · 0353-155629113
        </p>

        <div class="my-4">
            <a href="https://www.facebook.com/OSTAMMA/" class="btn btn-primary rounded-circle mx-2">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/ostamma.salud" class="btn btn-primary rounded-circle mx-2">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/5493535629113" class="btn btn-primary rounded-circle mx-2">
                <i class="fab fa-whatsapp"></i>
            </a>
        </div>

        <a href="http://www.gesta.org.ar" target="_blank" class="d-block my-4">
            <img src="/imgs/gestablanco.png" style="height:80px;"
                alt="Entidad perteneciente al Grupo GESTA"
                class="img-fluid mx-auto d-block">
        </a>

        <img src="/imgs/sssbanner.jpg"
            alt="Superintendencia de Salud de la Nación"
            class="img-fluid rounded mx-auto d-block">

    </div>
</section>

<style>
    .logo-principal,
    .gesta img,
    .sss-banner {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }


    .contact-section {
        background-color: #003a5d;
        padding: 3rem 1rem;
    }

    .logo-principal {
        max-width: 280px;
        width: 100%;
        height: auto;
    }

    .rnos {
        color: #ffffff;
        font-size: 1.2rem;
        margin-top: 0.5rem;
    }


    .telefono-principal {
        color: #ffffff;
        font-size: 2rem;
        font-weight: bold;
        margin: 2rem 0 1rem;

        display: flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
    }

    .icono-phone {
        width: 26px;
        height: 26px;
        flex-shrink: 0;
    }

    .direccion {
        color: #dce9f1;
        font-size: 1rem;
    }

    .redes a {
        min-width: 48px;
    }

    .gesta img {
        max-width: 260px;
        width: 100%;
    }

    .sss-banner {
        max-width: 100%;
        margin-top: 2rem;
    }
</style>

@endsection

<!---
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
</style>-->