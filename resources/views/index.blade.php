<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portuaria - Gestión y Servicios</title>

    <!-- Fuentes y Bootstrap -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- hoja de estilos personalizada -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

<header class="py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <img src="{{ asset('static/img/icons/logo_espomalia.png') }}" alt="Logo Portuaria" class="img-fluid">
        </div>

        <!-- Menú grande -->
        <nav class="d-none d-md-flex">
            <a href="{{ route('inicio') }}" class="text-white text-decoration-none mx-3">Inicio</a>
            <a href="{{ route('servicios') }}" class="text-white text-decoration-none mx-3">Nuestros Servicios</a>
            <a href="{{ route('nosotros') }}" class="text-white text-decoration-none mx-3">Sobre Nosotros</a>
            <a href="{{ route('organigrama') }}" class="text-white text-decoration-none mx-3">Organigrama</a>
            <a href="{{ route('contacto') }}" class="text-white text-decoration-none mx-3">Contáctanos</a>
        </nav>

        <!-- Botón de Login/Logout -->
        @if(Auth::check())
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">Salir</button>
        @else
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar Sesión</button>
        @endif

        <!-- Menú móvil -->
        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <!-- Menú móvil desplegable -->
    <div class="collapse navbar-collapse d-md-none" id="mobileMenu">
        <nav class="navbar-nav text-center">
            <a href="{{ route('inicio') }}" class="nav-link">Inicio</a>
            <a href="{{ route('servicios') }}" class="nav-link">Nuestros Servicios</a>
            <a href="{{ route('nosotros') }}" class="nav-link">Sobre Nosotros</a>
            <a href="{{ route('organigrama') }}" class="nav-link">Organigrama</a>
            <a href="{{ route('contacto') }}" class="nav-link">Contáctanos</a>
            @if(Auth::check())
                <button class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#logoutModal">Salir</button>
            @else
                <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
            @endif
        </nav>
    </div>
</header>

<!-- Carrusel -->
<section class="hero">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('static/img/fondo1-scroll.jpg') }}" class="d-block w-100" alt="Imagen 1">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3">
                    <h5
                        @if(Auth::check())
                            contenteditable="true"
                            onblur="guardarTextoCarrusel(this, 'carrusel_titulo_1')"
                            style="border:1px dashed #ffc107; outline:none;"
                        @endif
                    >{{ $carrusel_titulo_1 ?? 'Optimización Portuaria' }}</h5>
                    <p
                        @if(Auth::check())
                            contenteditable="true"
                            onblur="guardarTextoCarrusel(this, 'carrusel_texto_1')"
                            style="border:1px dashed #ffc107; outline:none;"
                        @endif
                    >{{ $carrusel_texto_1 ?? 'Mejorando los procesos logísticos para un futuro más eficiente.' }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('static/img/fondo2-scroll.webp') }}" class="d-block w-100" alt="Imagen 2">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3">
                    <h5
                        @if(Auth::check())
                            contenteditable="true"
                            onblur="guardarTextoCarrusel(this, 'carrusel_titulo_2')"
                            style="border:1px dashed #ffc107; outline:none;"
                        @endif
                    >{{ $carrusel_titulo_2 ?? 'Logística Global' }}</h5>
                    <p
                        @if(Auth::check())
                            contenteditable="true"
                            onblur="guardarTextoCarrusel(this, 'carrusel_texto_2')"
                            style="border:1px dashed #ffc107; outline:none;"
                        @endif
                    >{{ $carrusel_texto_2 ?? 'Conectando puertos, mercados y oportunidades a nivel mundial.' }}</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('static/img/fondos3-scroll.jpg') }}" class="d-block w-100" alt="Imagen 3">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 p-3">
                    <h5
                        @if(Auth::check())
                            contenteditable="true"
                            onblur="guardarTextoCarrusel(this, 'carrusel_titulo_3')"
                            style="border:1px dashed #ffc107; outline:none;"
                        @endif
                    >{{ $carrusel_titulo_3 ?? 'Soluciones Sostenibles' }}</h5>
                    <p
                        @if(Auth::check())
                            contenteditable="true"
                            onblur="guardarTextoCarrusel(this, 'carrusel_texto_3')"
                            style="border:1px dashed #ffc107; outline:none;"
                        @endif
                    >{{ $carrusel_texto_3 ?? 'Comprometidos con un futuro verde en el comercio internacional.' }}</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="company-section py-5">
        <div class="container text-center">
            <h2 class="section-title mb-4">Nuestra Empresa</h2>
            <p class="lead">En ESPOMALIA C.LTDA, nos dedicamos a ofrecer soluciones logísticas de alta calidad, con un enfoque en la sostenibilidad y la eficiencia. A lo largo de los años, hemos establecido alianzas estratégicas que nos permiten conectar mercados y optimizar los procesos en el comercio internacional.</p>
            <p class="lead">Nuestra misión es ser líderes en el sector portuario, brindando servicios confiables y a medida para nuestros clientes, mientras nos mantenemos comprometidos con la innovación y la protección del medio ambiente.</p>
        </div>
    </section>

    <section class="team-section py-5">
        <div class="container text-center">
            <h2 class="mb-4">Nuestro Equipo</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#missionModal">
                        <img src="static/img/mision.png" alt="Misión" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Misión</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#visionModal">
                        <img src="static/img/vision.jpg" alt="Visión" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Visión</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card" data-bs-toggle="modal" data-bs-target="#servicesModal">
                        <img src="static/img/servicios.jpg" alt="Servicios" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Servicios</h5>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-- Modal Misión -->
    <div class="modal fade" id="missionModal" tabindex="-1" aria-labelledby="missionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="missionModalLabel">Nuestra Misión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Proveer servicios integrales en logística portuaria y comercio internacional 
                        con un enfoque en calidad y sostenibilidad.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Visión -->
    <div class="modal fade" id="visionModal" tabindex="-1" aria-labelledby="visionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="visionModalLabel">Nuestra Visión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ser reconocidos como líderes en el sector portuario y de comercio internacional a nivel global.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Servicios -->
    <div class="modal fade" id="servicesModal" tabindex="-1" aria-labelledby="servicesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="servicesModalLabel">Nuestros Servicios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Ofrecemos una amplia gama de servicios para optimizar tus operaciones logísticas, incluyendo gestión portuaria, 
                        soluciones en comercio internacional, transporte de carga, asesoría en aduanas y más.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="hero-content text-center text-white py-5">
        <h1>ESPOMALIA C.LTDA</h1>
        <h2>Gestión y Servicios</h2>
        <button onclick="window.location.href='{{ route('contacto') }}'" class="btn btn-light mt-3">Contáctanos</button>
    </div>
</section>

<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="username" name="usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal de Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Cerrar Sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro que deseas cerrar sesión?</p>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer class="text-white py-3 mt-5">
    <div class="container text-center">
        &copy; 2024 ESPOMALIA C.LTDA - Todos los derechos reservados
    </div>
</footer>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS personalizado -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>

@if(Auth::check())
<form id="form-carrusel-texto" method="POST" action="{{ route('texto.update', 'dummy') }}" style="display:none;">
    @csrf
    @method('PUT')
    <input type="hidden" name="clave" id="clave-carrusel">
    <input type="hidden" name="contenido" id="contenido-carrusel">
</form>
<script>
function guardarTextoCarrusel(element, clave) {
    let contenido = element.innerText.trim();
    if (!contenido) return; // No envía si está vacío
    document.getElementById('clave-carrusel').value = clave;
    document.getElementById('contenido-carrusel').value = contenido;
    let form = document.getElementById('form-carrusel-texto');
    form.action = "{{ url('/texto') }}/" + clave;
    form.submit();
}
</script>
@endif