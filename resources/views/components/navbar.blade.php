<nav class="navbar navbar-expand  navbar-light bg-light">
    <a class="navbar-brand" href="#">Mi Portafolio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('inicio') }}">Proyectos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
            </li>
        </ul>
    </div>
</nav>
