<?php
	$estilo = "";
?>

@extends('layouts.default')

@section('title')
    Ayuda para participar o crear tu torneo.
@endsection

@section('content')
	<main>
		<article>
			<h1>Creá tu Cuenta:</h1>
			<section class="formulario">
				<form id="registro" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="campo">
						<input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus>

						@if ($errors->has('name'))
							<span class="error" role="alert">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
					<div class="campo">
						<input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Usuario" required autofocus>

						@if ($errors->has('username'))
							<span class="error" role="alert">
								<strong>{{ $errors->first('username') }}</strong>
							</span>
						@endif
					</div>
					<div class="campo">
						<input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>

						@if ($errors->has('email'))
							<span class="error" role="alert">
								<strong>{{ $errors->first('email') }}</strong>
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
					<div class="campo">
						<input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
					</div>
					<div class="campo">
						<select name="country-id">
						   <option value="" disabled>País</option>
						   @foreach($countries as $country)
	
								@if($country->code == 'AR')
									<option value="{{ $country->id }}" selected>{{ $country->name }}</option>
								@else
									<option value="{{ $country->id }}">{{ $country->name }}</option>
								@endif
						   @endforeach
						</select>
					</div>
					<div class="<?= $estilo ?>"><?= isset($errores["fotoUsuario"]) ? $errores["fotoUsuario"] : "" ?></div>
					<div class="campo">
						<input type="file" name="fotoUsuario" value="<?= isset($_FILES["fotoUsuario"]["name"]) ? $_FILES["fotoUsuario"]["name"] : "" ?>" accept="image/*">
					</div>
					<div class="campo">
						<button type="submit" form="registro" value="registrarme">Registrarme</button>
						<button type="reset" form="registro" value="reset">Borrar</button>
					</div>
				</form>
				<div class="campo">
					<p><em>Todos los campos son requeridos.</em></p>
				</div>
			</section>
		</article>
	</main>
@endsection