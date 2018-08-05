<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
	<title>@yield('title')</title>
	<link href="/css/admin.css" rel="stylesheet"/>
	<link href="/fonts/css/fontawesome-all.css" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet"/> 
	<link rel="icon" href="/img/favicon.png" type="image/x-icon"/>
  <!--[if lt IE 9]>
  	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
 <header>
 	<div class="fila">
		<div class="fecha">
				<time>
					<?php
					$dias=array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
					$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
					echo "<span>".date("H:i")."hs</span><br>";
					echo "<span>".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')."</span";
					?>
				</time>
			</div>
		<div id="logo">
			<a href="{{ route('home') }}">
				<img src="/img/logo.png" alt="Los Torneos" class="logo"/>
			</a>
		</div>
		<nav class="usuarios {{ Auth::user() ? 'subir' : '' }}">
				@if(Auth::user())
					<div class="usuario">
						<img src="{{ asset('storage/img/avatar/' . Auth::user()->avatar) }}" alt="Foto Perfil" class="foto-usuario"/>
						<h4>{{ Auth::user()->username }}</h4>
					</div>
					<ul>
						<li><a href="{{ route('my-account') }}"><i class='fas fa-user-edit'></i>&nbsp; Mi Cuenta</a></li>
						<form action="{{ route('logout') }}" method="POST">
							@csrf
							<li><button type="submit" class="logout" {{-- onclick="event.preventDefault();
						document.getElementById('logout-form').submit(); --}}><i class="fas fa-user-times"></i>&nbsp; Salir</button></li>
						</form>
                        {{-- <form id='logout-form' action="{{route('logout') }} dsiplay="none">
                            @csfr
                        </form>
                        ---------------- VER QUÉ ONDA.... --}}
					</ul>
                @else
					<ul>
					<li><a href="{{ route('login') }}"><i class="fas fa-user"></i>&nbsp; Ingresá</a></li>
					<li><a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>&nbsp; Registrate</a></li>
					</ul>
                @endif
		</nav>
	 </div>
	@include('layouts.admin-partials.main-nav')
    </header>
    <section class="admin">
        {{-- <aside>
            @include('layouts.admin-partials.sidebar')
        </aside> --}}
        <main>
            @yield('content')
        </main>
    </section>
    <footer>
		<div class="fila">
			<div class="fecha">
				<time><?php
					$dias=array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
					$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
					echo "<span>".date("H:i")."hs</span><br>";
					echo "<span>".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')."</span";
					?></time>
			</div>
			</div>
			<div class="disegnosis">
			 <a href="https://www.disegnosis.com.ar" target="_blank">
				<img src="/img/disegnosis.png" alt="Diseño Web DISEGNOSIS - Webmaster Diseño de Páginas / Sitios Web. Servicios de Hosting.">
			</a>
		</div>
	</footer>
</body>
<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/menu.js"></script>
<script src="/js/faq.js"></script>
@yield('scripts')
</html>