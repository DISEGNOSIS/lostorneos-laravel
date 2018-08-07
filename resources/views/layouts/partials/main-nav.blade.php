<a href="#" class="toggle-nav">
    <span class="ion-navicon-round">
        <img src="img/nav-icon.png" alt="Menú"/>
    </span>
</a>
<nav class="main-nav">
    <ul>
        <li class="{{ Nav::isRoute('home') }}"><a href="{{ route('home') }}"><i class="fas fa-home"></i></a></li>
        <li><a href="#crear-torneo.php"><i class="fas fa-trophy"></i>&nbsp; Crear Torneo</a></li>
        <li class="{{ Nav::isRoute('posts') }}"><a href="{{ route('posts') }}"><i class="far fa-newspaper"></i>&nbsp; Noticias</a></li>
        <li class="{{ Nav::isRoute('faq') }}"><a href="{{ route('faq') }}"><i class="fas fa-question"></i>&nbsp; Ayuda</a></li>
        <li><a href="#contacto.php"><i class="fas fa-envelope"></i></a></li>
    </ul>
</nav>