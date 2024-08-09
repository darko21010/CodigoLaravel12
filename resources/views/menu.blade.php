
<nav>
    @guest
        <a href="{{ route('login') }}">Iniciar Sesión</a> -
        <a href="{{ route('register') }}">Registrarse</a>
    @else
        <a href="{{ route('home') }}">Inicio</a> -
        <a href="{{ route('personas.options') }}">Personas</a> -
        <a href="{{ route('contact.show') }}">Contacto</a> -
        <a href="{{ route('servicios.index') }}">Visualizar Servicios</a> - <!-- Nueva opción -->
        <a href="{{ route('servicios.create') }}">Crear Nuevo Servicio</a> -
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            Cerrar Sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    @endguest
</nav>
