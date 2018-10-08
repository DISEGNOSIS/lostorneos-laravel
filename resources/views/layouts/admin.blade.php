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
	@yield('head')
  <!--[if lt IE 9]>
  	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
 <header>
 	<div class="fila">
		<time>
			<div class="wrap">
				<div class="widget">
					<div class="fecha">
						<p id="diaSemana" class="diaSemana">Martes</p>
						<p id="dia" class="dia"></p>
						<p>de </p>
						<p id="mes" class="mes"></p>
						<p>de </p>
						<p id="year" class="year"></p>
					</div>
			
					<div class="reloj">
						<p id="horas" class="horas"></p>
						<p>:</p>
						<p id="minutos" class="minutos"></p>
						<div class="caja-segundos">
							<p id="ampm" class="ampm"></p>
							<p id="segundos" class="segundos"></p>
						</div>
					</div>
				</div>
			</div>
		</time>
		<div id="logo">
			<a href="{{ route('home') }}">
				<img src="/img/logo.png" alt="Los Torneos" class="logo"/>
			</a>
		</div>
		<nav class="usuarios {{ Auth::user() ? 'subir' : '' }}">
				@if(Auth::user())
					<div class="usuario">
						<img src="{{ asset('/storage/img/avatar/' . Auth::user()->avatar) }}" alt="Foto Perfil" class="foto-usuario"/>
						<h4>{{ Auth::user()->username }}</h4>
					</div>
					<ul>
						<li><a href="{{ route('my-account') }}"><i class='fas fa-user-edit'></i>&nbsp; Mi Cuenta</a></li>
						<form action="{{ route('logout') }}" method="POST">
							@csrf
							<li><button type="submit" class="logout"><i class="fas fa-user-times"></i>&nbsp; Salir</button></li>
						</form>
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
	@include('flash::message')
    <section class="admin">
        {{-- <aside>
            @include('layouts.admin-partials.sidebar')
        </aside> --}}
        <main>
            @yield('content')
        </main>
    </section>
    <footer>
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
<script src="/js/reloj.js"></script>
<script>
	$('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@yield('scripts')
</html>