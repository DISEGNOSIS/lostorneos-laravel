<a href="#" class="toggle-nav">
    <span class="ion-navicon-round">
        <img src="img/nav-icon.png" alt="Menú"/>
    </span>
</a>
<nav class="main-nav">
    <ul class="nav">
        <li id="dropdown-button" class="activo"><a href="{{  route('admin.users') }}"><i class="fas fa-users"></i>&nbsp; Usuarios <i class="fas fa-caret-down"></i></a>
            <ul id="dropdown">
                <li><a href="{{ route('admin.roles') }}"><i class="fas fa-users-cog"></i>&nbsp; Roles</a></li>
                <li><a href="{{ route('admin.permissions') }}"><i class="fas fa-users-cog"></i>&nbsp; Permisos</a></li>
            </ul>
        </li>
        <li><a href="{{-- {{  route('admin.teams') }} --}}"><i class="fas fa-users-cog"></i>&nbsp; Equipos</a></li>
        <li><a href="{{-- {{  route('admin.matches') }} --}}"><i class="fas fa-users-cog"></i>&nbsp; Partidos</a></li>
        <li><a href="{{-- {{  route('admin.posts') }} --}}"><i class="fas fa-users"></i>&nbsp; Artículos</a></li>
    </ul>
</nav>