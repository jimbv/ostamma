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

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="/imgs/icono.png?v=1.1">
    <link rel="manifest" href="/favicon/site.webmanifest?v=1.1" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- CSS de Bootstrap y Fuentes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style_prueba.css?v=1.1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            src: url("/fonts/Cloudsters.otf") format("opentype");
            font-weight: normal;
            font-style: normal;
        }
    </style>

    <!-- Scripts de Vite -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('styles')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-white d-flex flex-column min-vh-100">

    <!-- BARRA SUPERIOR -->
    <div class="w-100" style="font-size: 0.80rem; background:#003a5d; position:fixed; top:0; left:0; z-index:1050; border-bottom:1px solid black; padding-top:2px;">
        <div class="container d-flex justify-content-end py-2">
            <ul class="d-flex gap-4 m-0" style="list-style:none;">
                <li><a href="/page/prestadores" class="text-white text-decoration-none">Prestadores</a></li>
                <li><a href="/page/empresas" class="text-white text-decoration-none">Empresas</a></li>
                <li><a href="/page/proveedores" class="text-white text-decoration-none">Proveedores</a></li>
            </ul>
        </div>
    </div>

    <!-- HEADER PRINCIPAL -->
    <header class="w-100 bg-white shadow-sm" style="position:fixed; top:36px; left:0; z-index:1040;">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="/imgs/logo.png?v=2" alt="OSTAMMA Salud" style="height:70px;">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars" style="color:black; font-size:22px;"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDropdown" style="font-family:Nunito;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="dropdownPlanes" role="button" data-bs-toggle="dropdown" aria-expanded="false">PLANES</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownPlanes">
                                <li><a class="dropdown-item" href="/planclasico/">PLAN CLÁSICO</a></li>
                                <li><a class="dropdown-item" href="/plansuperior/">PLAN SUPERIOR</a></li>
                                <li><a class="dropdown-item" href="/planjoven/">PLAN JOVEN</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a class="nav-link mx-2" href="/cartilla">CARTILLA</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">INSTITUCIONAL</a>
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

                    <a href="https://www.maradonasalud.com.ar/turnos/login.php" class="btn text-white ms-3" target="_blank"
                        style="background:#0098d3; border:none; padding:8px 18px; border-radius:6px; display: inline-flex; align-items: center; gap: 8px;">
                        <i class="fas fa-calendar-alt"></i> Turnos
                    </a>

                    <a href="/#app" class="btn text-white ms-2"
                        style="background:#003a5d; border:none; padding:8px 18px; border-radius:6px;">
                        Descargá la APP
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- ESPACIADOR -->
    <div style="height:130px;"></div>

    <main class="flex-grow-1">
        @yield('contenido')
    </main>

    <!-- FOOTER -->
    <footer class="w-100 mt-auto" style="background-color: #111e26;" id="pie">
        <div class="container py-5">
            <div class="row align-items-center mb-4">
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <img src="/imgs/logoblanco.png" alt="OSTAMMA Salud" style="height: 90px;" class="img-fluid">
                </div>

                <div class="col-md-4 text-white mb-3 mb-md-0">
                    <form action="{{ route('subscribe') }}" method="POST">
                        @csrf
                        <label for="email" class="form-label mb-2">Sumate a nuestra lista y recibí novedades</label>
                        <div class="input-group mb-2">
                            <input type="email" id="email" name="email" placeholder="Ingresá tu email" class="form-control" required>
                            <button type="submit" class="btn btn-danger">Suscribirme</button>
                        </div>
                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                        @error('g-recaptcha-response') <span class="text-danger small">{{ $message }}</span> @enderror
                    </form>
                </div>

                <div class="col-md-4 text-white text-md-end text-center">
                    <p class="mb-2"><a href="https://wa.me/5493535629113" target="_blank" class="text-white text-decoration-none"><i class="fab fa-whatsapp me-2"></i> 549 353 5629113</a></p>
                    <p class="mb-2"><a href="https://www.instagram.com/ostamma.salud" target="_blank" class="text-white text-decoration-none"><i class="fab fa-instagram me-2"></i> @ostamma.salud</a></p>
                    <p class="mb-2"><a href="mailto:ostamma@amma.org.ar" class="text-white text-decoration-none"><i class="fas fa-envelope me-2"></i> ostamma@amma.org.ar</a></p>
                    <p class="mb-0"><i class="fas fa-map-marker-alt me-2"></i> Villa María, Córdoba</p>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-4 py-3 border-top border-secondary text-white small flex-wrap">
                <a href="/page/consejo-directivo/" class="text-white text-decoration-none">Nuestra empresa</a>
                <a href="/novedades" class="text-white text-decoration-none">Noticias</a>
                <a href="/contacto" class="text-white text-decoration-none">Preguntas frecuentes</a>
            </div>
            
            <div class="text-center pt-3 text-white-50 small">
                © {{ date('Y') }} OSTAMMA
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS (Al final del body para no bloquear la renderización) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
    @yield('scripts')

</body>
</html>