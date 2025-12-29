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
        
    <img src="/imgs/AfiliateOSTAMMA.jpg" alt="Afiliate"/>

        
    </div>
</section>
<section class="mb-5 bg-gray-200 p-5">
    <div id="postsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <p></p>
            <h2 class="pt-3 text-2xl md:text-3xl font-black text-primary uppercase text-center mb-10" style="color:#111!important;">
                NOVEDADES</h2>

            @foreach($posts->chunk(3) as $chunk)
            <div class="carousel-item @if($loop->first) active @endif">
                <div class="row g-4 justify-content-center">

                    @foreach($chunk as $post)
                    <div class="col-md-4">
                        <a href="/novedad/{{$post->slug}}" style="text-decoration:none; color:black;">
                            <div class="card h-100 shadow-sm border-0">

                                {{-- Imagen destacada (primera del post) --}}
                                @if($post->images->isNotEmpty())
                                <img src="{{ asset($post->images->first()->image_path) }}"
                                    class="card-img-top"
                                    alt="{{ $post->images->first()->alt_text ?? $post->title }}">
                                @else
                                <img src="https://via.placeholder.com/600x400?text=Sin+Imagen"
                                    class="card-img-top"
                                    alt="{{ $post->title }}">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">{{ $post->title }}</h5>
                                    <p class="card-text">{!! Str::limit($post->short_text, 100) !!}</p>
                                    <a href="{{ url('/posts/'.$post->slug) }}" class="btn btn-primary btn-sm">
                                        Leer más
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
            @endforeach

        </div>

        {{-- Controles del carrusel --}}
        @if($posts->count() > 3)
        <button class="carousel-control-prev" type="button" data-bs-target="#postsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#postsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
        @endif
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
</style>