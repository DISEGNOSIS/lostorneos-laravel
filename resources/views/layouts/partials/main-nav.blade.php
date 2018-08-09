<a href="#" class="toggle-nav">
    <span class="ion-navicon-round">
        <img src="/img/nav-icon.png" alt="Menú"/>
    </span>
</a>
<nav class="main-nav">
    <ul>
        <li class="{{ Nav::isRoute('home') }}"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
        <li class="{{ Nav::isResource('tournaments') }}"><a href="{{ route('tournaments') }}"><i class="fas fa-trophy"></i>&nbsp; Torneos</a></li>
        <li class="{{ Nav::isResource('teams') }}"><a href="{{ route('teams') }}"><i class="fas fa-gamepad"></i>&nbsp; Equipos</a></li>
        <li class="{{ Nav::isResource('posts') }}"><a href="{{ route('posts') }}"><i class="far fa-newspaper"></i>&nbsp; Noticias</a></li>
        <li class="{{ Nav::isRoute('faq') }}"><a href="{{ route('faq') }}"><i class="fas fa-question"></i>&nbsp; Ayuda</a></li>
        {{-- <li><a href="#contacto.php"><i class="fas fa-envelope"></i></a></li> --}}
    </ul>
</nav>