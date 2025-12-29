<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OSTAMMA Salud</title>

    <meta property="og:locale" content="es_AR" />
    <meta property="og:title" content="Obra Social OSTAMMA Salud" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://ostamma.org.ar/" />
    <meta property="og:description" content="Ostamma Salud" />


    <link rel="icon" type="image/x-icon" href="/imgs/icono.png>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MVM" />
    <link rel="manifest" href="/favicon/site.webmanifest" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/style_prueba.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: "Logomark";
            src: url("/fonts/LOGOMARK.otf") format("opentype"),
                url("/fonts/LOGOMARK.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Cloudsters";
            src: url("/fonts/Cloudsters.otf") format("opentype"),
                font-weight: normal;
            font-style: normal;
        }
    </style>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('scripts')
    @yield('styles')


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>

<body class="bg-white flex flex-col min-h-screen justify-start">



    <!-- BARRA SUPERIOR -->
<div class="w-full" style="background:#003a5d; position:fixed; top:0; left:0; width:100%; z-index:1050;">
    <div class="container d-flex justify-content-end py-2">
        <ul class="d-flex gap-4 m-0" style="list-style:none;">
            <li><a href="#" class="text-white text-decoration-none">Prestadores</a></li>
            <li><a href="#" class="text-white text-decoration-none">Empresas</a></li>
            <li><a href="#" class="text-white text-decoration-none">Proveedores</a></li>
            <li><a href="#" class="text-white text-decoration-none">Trabajá con Nosotros</a></li>
        </ul>
    </div>
</div>

<!-- HEADER PRINCIPAL -->
<header class="w-full bg-white shadow-md" style="position:fixed; top:40px;box-shadow: 0px 0px 2px black; left:0; width:100%; z-index:1040;">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm p-3">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/imgs/logo.png" alt="OSTAMMA Salud" style="height:80px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars" style="color:black; font-size:22px;"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-family:Nunito;">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">PLANES</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/servicio/">PLAN CLÁSICO</a></li>
                            <li><a class="dropdown-item" href="/servicio/">PLAN SUPERIOR</a></li>
                            <li><a class="dropdown-item" href="/servicio/">PLAN JOVEN</a></li>
                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link mx-2" href="/#productos">CARTILLA</a></li> 
                     <li class="nav-item dropdown">
                        <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">INSTITUCIONAL</a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/page/nuestra-historia/">NUESTRA HISTORIA</a></li>
                            <li><a class="dropdown-item" href="/page/consejo-directivo/">CONSEJO DIRECTIVO</a></li>
                            <li><a class="dropdown-item" href="/page/institucional/">MISION, VISIÓN Y VALORES</a></li>
                            <li><a class="dropdown-item" href="/page/politica-de-calidad/">POLÍTICA DE CALIDAD</a></li>
                            <li><a class="dropdown-item" href="/page/estatuto/">ESTATUTO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link mx-2" href="/contacto">CONTACTO</a></li>
                </ul>

                <!-- BOTÓN ACCEDE A TU CUENTA -->
                <a href="/login" class="btn btn-primary ms-3" 
                   style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;">
                    Accedé a tu cuenta
                </a>
            </div>
        </div>
    </nav>
</header>

<!-- ESPACIADOR PARA QUE EL CONTENIDO NO SUBA BAJO EL HEADER -->
<div style="height:140px;"></div>


    <main>
        @yield('contenido')
    </main>





    <footer class="w-full mt-auto" style="background-color: #111e26;" id="pie">
        <div class="max-w-screen-xl mx-auto px-5">
            <div class="pt-5">
                <div class="flex flex-col sm:flex-row justify-center sm:justify-between items-center mb-10">
                    <img src="/imgs/logoblanco.png" alt="OSTAMMA Salud" style="height: 100px;" class=" w-auto mb-5 sm:mb-0">


                    <form action="{{ route('subscribe') }}" method="POST" class="sm:w-50 max-w-md text-white">
                        @csrf
                        <label for="email" class="form-label mb-2">
                            Sumate a nuestra lista y recibí novedades
                        </label>

                        <div class="input-group">
                            <input type="email"
                                id="email"
                                name="email"
                                placeholder="Ingresá tu email"
                                class="form-control rounded-start"
                                required>
                            <button type="submit" class="btn btn-danger rounded-end">
                                Suscribirme
                            </button>
                        </div>

                            <div class="mb-1 mt-1">
                                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                                @error('g-recaptcha-response') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                    </form>



                    <div class="flex justify-end items-center gap-5">
                        <div class="contacto" style=" text-align:left; ">
                            <p style="color:#fff; font-size:18px; margin-bottom:15px;font-family:Montserrat;">
                                
                            </p>

                            <p>
                                <a href="https://wa.me/3534771099?text=Hola,%20acabo%20de%20visitar%20su%20pagina%20web%20y%20queria%20pedir%20mas%20informacion%20sobre%20sus%20productos%20y%20servicios" target="_blank" style="color:#fff; text-decoration:none; margin:0 10px; font-size:16px;">
                                    <i class="fab fa-whatsapp"></i> 353 4771099
                                </a>
                            </p>

                            <p>
                                <a href="https://www.instagram.com/ostamma.salud" target="_blank" style="color:#fff; text-decoration:none; margin:0 10px; font-size:16px;">
                                    <i class="fab fa-instagram"></i> @ostamma.salud
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@clickcomunicacion.com.ar" style="color:#fff; text-decoration:none; margin:0 10px; font-size:16px;">
                                    <i class="fas fa-envelope"></i> info@ostamma.org.ar
                                </a>
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/place/Villa+María,+Córdoba" target="_blank"
                                    style="color:#fff; text-decoration:none; margin:0 10px; font-size:16px;">
                                    <i class="fas fa-map-marker-alt"></i> Villa María, Córdoba
                                </a>
                            </p>

                        </div>

                        <!-- Hover con estilo -->
                        <style>
                            .contacto a:hover {
                                color: #f74e04;
                            }

                            .contacto i {
                                margin-right: 8px;
                            }
                        </style>


                    </div>
                </div>
                <div class=" text-sm flex flex-col sm:flex-row justify-center items-center gap-5 pb-10" style="color: white;">
                    <a href="/institucional" style="color: white;text-decoration: none;">Nuestra empresa</a>
                    <a href="/novedades" style="color: white;text-decoration: none;">Noticias</a>
                    <a href="/contacto" style="color: white;text-decoration: none;">Preguntas frecuentes</a>
                    <a target="_blank" href="https://www.instagram.com/ostamma.salud/" style="color: white;text-decoration: none;">
                        <i class="fab fa-instagram"></i> ostamma.salud
                    </a>
                </div>
                <div class="text-center pb-10 text-xs " style="color: white;text-decoration: none;">
                    © {{ date('Y') }} OSTAMMA
                </div>

            </div>
        </div>
    </footer>






</body>

</html