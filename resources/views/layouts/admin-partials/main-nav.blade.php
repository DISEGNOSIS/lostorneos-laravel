<a href="#" class="toggle-nav">
    <span class="ion-navicon-round">
        <img src="img/nav-icon.png" alt="Menú"/>
    </span>
</a>
<nav class="main-nav">
    <ul>
        <li class="activo"><a href="{{  route('admin.users') }}"><i class="fas fa-users"></i>&nbsp; Usuarios</a>
            <li><a href="{{  route('admin.roles') }}"><i class="fas fa-users-cog"></i>&nbsp; Roles & Permisos</a></li>
        </li>
        <li><a href="{{-- {{  route('admin.teams') }} --}}"><i class="fas fa-users-cog"></i>&nbsp; Equipos</a></li>
        <li><a href="{{-- {{  route('admin.matches') }} --}}"><i class="fas fa-users-cog"></i>&nbsp; Partidos</a></li>
        <li><a href="{{-- {{  route('admin.posts') }} --}}"><i class="fas fa-users"></i>&nbsp; Artículos</a></li>
    </ul>
</nav>