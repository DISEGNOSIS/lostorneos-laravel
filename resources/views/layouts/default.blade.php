<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="fonts/css/fontawesome-all.css">
	<link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet"> 
	<link rel="icon" href="img/favicon.png" type="image/x-icon">
  <!--[if lt IE 9]>
  	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
 <header>
 	<div class="fila">
 		<div class="fecha">
			<time><?php
				$dias=array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
				$meses=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
				echo "<span>".date("H:i")."hs</span><br>";
				echo "<span>".$dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y')."</span";
				?></time>
		</div>
		<div id="logo">
			<a href="index.php">
				<img src="img/logo.png" alt="Los Torneos" class="logo">
			</a>
		</div>
		<nav class="usuarios <?= isset($_SESSION['usuario']) ? 'subir' : '' ?>" >
				@if(Auth::user()) { 
					<div class="usuario">
						<img src="{{ Auth::user()->getImage() }}" alt="Foto Perfil" class="foto-usuario" />
						<h4>{{ Auth::user()->getName() }}</h4>
					</div>
					<ul>
						<li><a href='my-account'><i class='fas fa-user-edit'></i>&nbsp; Mi Cuenta</a></li>
						<li><a href='logout' {{-- onclick="event.preventDefault();
                        document.getElementById('logout-form').submit(); --}}><i class='fas fa-user-times'></i>&nbsp; Salir</a></li>
                        {{-- <form id='logout-form' action="{{route('logout') }} dsiplay="none">
                            @csfr
                        </form>
                        ---------------- VER QUÉ ONDA.... --}}
					</ul>
                @else
					<ul>
					<li><a href="login"><i class="fas fa-user"></i>&nbsp; Ingresá</a></li>
					<li><a href="register"><i class="fas fa-user-plus"></i>&nbsp; Registrate</a></li>
					</ul>
                @endif
		</nav>
	 </div>
	 <a href="#" class="toggle-nav">
		 <span class="ion-navicon-round">
			 <img src="img/nav-icon.png" alt="Menú"/>
		 </span>
	 </a>
	 <nav class="main-nav">
		 <ul>
		 	<li class="activo"><a href="index.php"><i class="fas fa-home"></i></a></li>
			 <li><a href="#buscar.php"><i class="fas fa-search"></i>&nbsp; Buscar</a></li>
			 <li><a href="#crear-torneo.php"><i class="fas fa-trophy"></i>&nbsp; Crear Torneo</a></li>
			 <li><a href="faq"><i class="fas fa-question"></i>&nbsp; Ayuda</a></li>
			 <li><a href="#contacto.php"><i class="fas fa-envelope"></i></a></li>
		 </ul>
	 </nav>
	</header>
    @yield('content')
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
				<div class="sociales">
					<div class="discord"><a href="#"><i class="fab fa-discord"></i></a></div>
					<div class="facebook"><a href="#"><i class="fab fa-facebook-square"></i></a></div>
				</div>
			</div>
			<div class="disegnosis">
			 <a href="https://www.disegnosis.com.ar" target="_blank">
								 <img src="img/disegnosis.png" alt="Diseño Web DISEGNOSIS - Webmaster Diseño de Páginas / Sitios Web. Servicios de Hosting.">
							 </a>
		</div>
	</footer>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/faq.js"></script>
</html>