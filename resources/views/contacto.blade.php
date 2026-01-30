@extends('layouts.plantilla')
@section('contenido')
 
<section class="position-relative w-100" style="min-height: 60vh;  overflow:hidden;padding-top:80px; padding-bottom:80px; background: url('/imgs/contacto-fondo.jpg') no-repeat center center/cover;">
    

    <div class="container p-3 position-relative" style="z-index:2;">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="bg-white  p-md-5 rounded shadow-lg">
                    <h3 class="mb-3">DEJANOS TU CONSULTA</h3>
                    <hr>

                    @if(session('success'))
                        <div class="alert alert-success anim-up">
                            {{ session('success') }}
                        </div>
                    @else
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre y Apellido</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Teléfono / Celular</label>
                                <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Mensaje</label>
                                <textarea name="message" id="message" rows="5" class="form-control" required>{{ old('message') }}</textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="mb-3">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                @error('g-recaptcha-response') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="btn btn-dark w-100">Enviar mensaje</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<section class="w-100" style="height:60vh; border-bottom:10px solid #a5a5a5ff;top:-45px; position:relative;text-align:center; padding-top:40px; padding-bottom:40px;">

<h3 class="mb-3">DÓNDE ESTAMOS</h3>
    <section class="w-100 map-section">
        <section class="map-section">
    <iframe
        src="https://www.google.com/maps/d/embed?mid=1KKnS8SIeRZQruFkK1z0FGNNezitKn5g&ehbc=2E312F"
        class="map-iframe map-no-interaction"
        loading="lazy">
    </iframe> 
    </section>
    </section>
<style>
.map-section {
    position: relative;
    height: 60vh;
    border-bottom: 10px solid #00395c;
    overflow: hidden;
}

/* El iframe NO participa del flujo */
.map-iframe {
    position: absolute;
    top: -45px;      
    left: 0;
    width: 100%;
    height: calc(100% + 45px);
    border: 0;
}
/*
.map-no-interaction {
    pointer-events: none;
}*/
</style>


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