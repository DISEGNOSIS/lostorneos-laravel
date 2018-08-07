@extends('layouts.default')

@section('title')
    Ingresá a Los Torneos
@endsection

@section('content')
	<?php $estilo = ""; ?>
    <main>
		<article>
			<h1>Ingresá a tu Cuenta:</h1>
			<section class="formulario">
				<form action="" method="post" action="{{ route('login') }}" id="ingreso">
					@csrf
					<div class="error"><?= isset($errores["usuario"]) ? $errores["usuario"]: "" ?></div>
					@if ($errors->has('username'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('username') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Usuario" required autofocus/>
					</div>
					@if ($errors->has('password'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required/>

					</div>
					<div class="campo1">
						<div class="checkbox">
							<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

							<label for="remember">
								{{ __('Recordarme') }}
							</label>
						</div>
						<a href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste la Contraseña?') }}
                        </a>
					</div>
					<div class="campo">
						<button type="submit" form="ingreso" value="ingresar">Ingresar</button>
					</div>
				</form>
				<hr>
				<h2>Podés ingresar con:</h2>
				<div class="social-login">
					<div class="discord-login">
						<a href="{{ route('discord') }}"><i class="fab fa-discord"></i></a>
					</div>
					<div class="facebook-login">
						<a href="{{ route('facebook') }}"><i class="fab fa-facebook-square"></i></a>
					</div>
					<div class="github-login">
						<a href="{{ route('github') }}"><i class="fab fa-github-square"></i></a>
					</div>
				</div>
			</section>
		</article>
	</main>
@endsection