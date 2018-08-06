<a href="#" class="toggle-nav">
    <span class="ion-navicon-round">
        <img src="img/nav-icon.png" alt="Menú"/>
    </span>
</a>
<nav class="main-nav">
    <ul class="nav">
        <li class="dropdown-button {{ Nav::isRoute('admin.users') }}"><a href="{{  route('admin.users') }}"><i class="fas fa-users"></i>&nbsp; Usuarios <i class="fas fa-caret-down"></i></a>
            <ul id="dropdown">
                <li class="{{ Nav::isRoute('admin.roles') }}"><a href="{{ route('admin.roles') }}"><i class="fas fa-users-cog"></i>&nbsp; Roles</a></li>
                <li class="{{ Nav::isRoute('admin.permissions') }}"><a href="{{ route('admin.permissions') }}"><i class="fas fa-users-cog"></i>&nbsp; Permisos</a></li>
            </ul>
        </li>
        <li class="{{-- {{ Nav::isRoute('admin.teams') }} --}}"><a href="{{-- {{  route('admin.teams') }} --}}"><i class="fas fa-users-cog"></i>&nbsp; Equipos</a></li>
        <li class="{{-- {{ Nav::isRoute('admin.matches') }} --}}"><a href="{{-- {{  route('admin.matches') }} --}}"><i class="fas fa-users-cog"></i>&nbsp; Partidos</a></li>
        <li class="{{ Nav::isRoute('admin.posts') }}"><a href="{{  route('admin.posts') }}"><i class="far fa-newspaper"></i>&nbsp; Noticias</a></li>
    </ul>
</nav>