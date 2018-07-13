@extends('layouts.default')

@section('title')
    Ayuda para participar o crear tu torneo.
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
					<div class="campo">
						<input id="username" type="username" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Usuario" required autofocus>

						@if ($errors->has('username'))
							<span class="error" role="alert">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
						@endif
					</div>
					<div class="campo">
						<input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>

						@if ($errors->has('password'))
							<span class="error" role="alert">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
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
			</section>
		</article>
	</main>
@endsection