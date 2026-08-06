@extends('layouts.plantilla')

@section('contenido')

<!-- Modal Inicio -->
<div class="modal fade" id="modalInicio" tabindex="-1" aria-labelledby="modalInicioLabel" aria-hidden="true" style="z-index: 1060;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0">

      <!-- Botón cerrar (cruz) -->
      <button type="button"
              class="btn-close position-absolute top-0 end-0 m-2 z-3 bg-white shadow-sm"
              data-bs-dismiss="modal"
              aria-label="Cerrar">
      </button>

      <!-- Imagen -->
      <div class="modal-body p-0 text-center">
        <img src="/imgs/app-sisalud.jpeg" class="img-fluid w-100 rounded-top" alt="Promo SISALUD">
      </div>

      <!-- Botones Tiendas -->
      <div class="p-3 d-flex flex-column gap-2 align-items-center bg-white rounded-bottom">

        <!-- Google Play -->
        <a href="https://play.google.com/store/apps/details?id=com.sisalud.app&pcampaignid=web_share"
           target="_blank"
           class="btn btn-dark w-75 d-flex align-items-center justify-content-center gap-2">
          <i class="bi bi-google-play"></i>
          Descargar en Google Play
        </a>

        <!-- App Store -->
        <a href="https://apps.apple.com/ar/app/sisalud/id6677057185"
           target="_blank"
           class="btn btn-dark w-75 d-flex align-items-center justify-content-center gap-2">
          <i class="bi bi-apple"></i>
          Descargar en App Store
        </a>

      </div>

    </div>
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

{{-- Banner Principal --}}
<section class="position-relative w-100" style="height: 100vh; border-bottom: 10px solid #0097ce; overflow:hidden;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: url('/imgs/fondo.png') center center / cover no-repeat; z-index:0;">
    </div>

    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background: rgba(0,0,0,0.6); z-index:1;">
    </div>

    <div class="position-absolute top-50 start-50 translate-middle text-center"
        style="z-index:2; width:90%; max-width:600px;">
        <div style="background: rgba(0,0,0,0.6); color: white; padding: 1rem;">
            <h1 class="h1 fw-bold mb-0" style="font-family: 'Nunito', sans-serif; text-shadow: 2px 2px 8px rgba(0,0,0,0.7);">
                Consultá por los mejores planes para tu grupo familiar
            </h1>
        </div>
    </div>
</section>

{{-- Productos y Planes --}}
<section id="productos" class="bg-white py-5">
    <div class="container">
        
        <div class="text-center mb-4">
            <a href="/contacto" class="d-block mb-3">
                <img src="/imgs/AfiliateOSTAMMA.jpg" alt="Afiliate" class="img-fluid rounded-3" />
            </a>
            
            <a href="/page/virtual" class="d-block">
                <img src="SaludVirtual.jpg" alt="Amma Salud Virtual" class="img-fluid rounded-3 mx-auto d-block">
            </a>
        </div>

        <div id="plan" class="my-5">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <div class="section-title">
                        <h1 id="titulop" class="fw-bold">PLANES</h1>
                        <h2 class="fs-5 fw-normal text-muted" style="font-family: 'Roboto', sans-serif;">
                            Nuestros planes de salud brindan una amplia cobertura. Con tu aporte mensual o con un pago adicional fijo,
                            ideales para grupos familiares o personas que buscan una buena cobertura social al mejor precio.
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center bg-white rounded-4 py-4">
                <div class="col-lg-4 col-md-6 col-sm-10 text-center mb-4">
                    <a href="/planjoven" class="d-block">
                        <img src="/imgs/joven.png" alt="Plan Joven" class="img-fluid mx-auto">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10 text-center mb-4">
                    <a href="/planclasico" class="d-block">
                        <img src="/imgs/clasico.png" alt="Plan Clásico" class="img-fluid mx-auto">
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10 text-center mb-4">
                    <a href="/plansuperior" class="d-block">
                        <img src="/imgs/superior.png" alt="Plan Superior" class="img-fluid mx-auto">
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Novedades --}}
<section class="mb-5 bg-light py-5">
    <div class="container">
        <h2 class="pt-3 fs-2 fw-bold text-uppercase text-center mb-4" style="color:#111;">
            NOVEDADES
        </h2>

        @if($posts->count() <= 3)
            {{-- Muestra estática si hay 3 o menos --}}
            <div class="row g-4 justify-content-center">
                @foreach($posts as $post)
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm border-0">
                            <a href="/novedad/{{ $post->slug }}" class="text-decoration-none text-dark">
                                @if($post->images->isNotEmpty())
                                    <img src="{{ asset($post->images->first()->image_path) }}" class="card-img-top" alt="{{ $post->images->first()->alt_text ?? $post->title }}">
                                @else
                                    <img src="https://via.placeholder.com/600x400?text=Sin+Imagen" class="card-img-top" alt="{{ $post->title }}">
                                @endif
                            </a>
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">
                                    {!! Str::limit($post->short_text, 100) !!}
                                </p>
                                <a href="{{ url('/novedad/'.$post->slug) }}" class="btn btn-primary btn-sm mt-auto align-self-start">
                                    Leer más
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Carrusel de Bootstrap si hay más de 3 --}}
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
                                                    <img src="{{ asset($post->images->first()->image_path) }}" class="card-img-top" alt="{{ $post->images->first()->alt_text ?? $post->title }}">
                                                @else
                                                    <img src="https://via.placeholder.com/600x400?text=Sin+Imagen" class="card-img-top" alt="{{ $post->title }}">
                                                @endif
                                            </a>
                                            <div class="card-body d-flex flex-column">
                                                <h5 class="card-title">{{ $post->title }}</h5>
                                                <p class="card-text">
                                                    {!! Str::limit($post->short_text, 100) !!}
                                                </p>
                                                <a href="{{ url('/novedad/'.$post->slug) }}" class="btn btn-primary btn-sm mt-auto align-self-start">
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

                <button class="carousel-control-prev" type="button" data-bs-target="#postsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark rounded-circle" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#postsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark rounded-circle" aria-hidden="true"></span>
                </button>
            </div>
        @endif
    </div>
</section>

{{-- App Autogestión --}}
<section class="py-5" id="app">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <img src="/imgs/appsisalud.jpeg" class="img-fluid rounded shadow mb-4" alt="APP OSTAMMA">
                <div class="d-flex flex-column gap-3 align-items-center">
                    <a href="https://play.google.com/store/apps/details?id=com.sisalud.app&pcampaignid=web_share" target="_blank" class="btn btn-dark w-75 d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-google-play"></i> Descargar en Google Play
                    </a>
                    <a href="https://apps.apple.com/ar/app/sisalud/id6677057185" target="_blank" class="btn btn-dark w-75 d-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-apple"></i> Descargar en App Store
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contacto --}}
<section class="contact-section text-center">
    <div class="container">
        <a href="https://ostamma.org.ar/" class="d-block mb-4 text-decoration-none">
            <img src="/imgs/Blanco.png" alt="OSTAMMA AMMA Salud" class="logo-principal img-fluid mx-auto d-block">
            <h1 class="rnos">RNOS 0-0270-9</h1>
        </a>

        <p class="telefono-principal">
            <svg class="icono-phone" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
            </svg>
            0800-777-2662
        </p>

        <p class="direccion">
            Gdor. Sabattini 93, Villa María, Córdoba <br>
            0353-4536925 · 0353-155629113
        </p>

        <div class="my-4">
            <a href="https://www.facebook.com/OSTAMMA/" class="btn btn-primary rounded-circle mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/ostamma.salud" class="btn btn-primary rounded-circle mx-2"><i class="fab fa-instagram"></i></a>
            <a href="https://wa.me/5493535629113" class="btn btn-primary rounded-circle mx-2"><i class="fab fa-whatsapp"></i></a>
        </div>

        <a href="http://www.gesta.org.ar" target="_blank" class="d-block my-4">
            <img src="/imgs/gestablanco.png" style="height:80px;" alt="Entidad perteneciente al Grupo GESTA" class="img-fluid mx-auto d-block">
        </a>

        <img src="/imgs/sssbanner.jpg" alt="Superintendencia de Salud de la Nación" class="img-fluid rounded mx-auto d-block">
    </div>
</section>

<style>
    .contact-section { background-color: #003a5d; padding: 3rem 1rem; }
    .logo-principal { max-width: 280px; width: 100%; height: auto; }
    .rnos { color: #ffffff; font-size: 1.2rem; margin-top: 0.5rem; }
    .telefono-principal { color: #ffffff; font-size: 2rem; font-weight: bold; margin: 2rem 0 1rem; display: flex; align-items: center; justify-content: center; gap: 12px; }
    .icono-phone { width: 26px; height: 26px; flex-shrink: 0; }
    .direccion { color: #dce9f1; font-size: 1rem; }
</style>

{{-- Script seguro para inicializar el Modal --}}
<script>
  (function () {
    // Función para intentar abrir el modal
    function lanzarModal() {
      var modalEl = document.getElementById('modalInicio');
      
      // Mover el modal al <body> para evitar recortes por z-index o contenedores padres
      if (modalEl && modalEl.parentNode !== document.body) {
        document.body.appendChild(modalEl);
      }

      // Si Bootstrap está cargado, instanciamos y mostramos
      if (typeof bootstrap !== 'undefined' && bootstrap.Modal) {
        var myModal = new bootstrap.Modal(modalEl);
        myModal.show();
      } else {
        // Si aún no cargó Bootstrap, reintentamos en 100ms
        setTimeout(lanzarModal, 100);
      }
    }

    // Arrancamos el intento cuando el DOM esté listo
    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', lanzarModal);
    } else {
      lanzarModal();
    }
  })();
</script>

@endsection