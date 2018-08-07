<?php
	$estilo = "";
?>

@extends('layouts.default')

@section('title')
    Registrate en Los Torneos.
@endsection

@section('head')
	<link rel="stylesheet" href="/css/parsley.css"/>
@endsection

@section('content')
	@include('flash::message')
	<main>
		<article>
			<h1>Creá tu Cuenta:</h1>
			<section class="formulario">
				<form id="registro" action="{{ route('register') }}" method="POST" aria-label="{{ __('Register') }}" enctype="multipart/form-data" data-parsley-validate>
					@csrf
					@if($errors->has('name'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('name') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus minlength="3" maxlength="255"/>
					</div>
					@if($errors->has('username'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('username') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input id="username" type="text" class="{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Usuario" required autofocus minlength="2" maxlength="255"/>
					</div>
					@if($errors->has('email'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required/>
					</div>
					@if($errors->has('password'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required minlength="6"/>
					</div>
					<div class="campo">
						<input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required>
					</div>
					<div class="custom-select">
						<select name="country" required>
						   <option value="" disabled>País</option>
						   @foreach($countries as $country)
	
								@if($country->id == 10)
									<option value="{{ $country->id }}" selected>{{ $country->name }}</option>
								@else
									<option value="{{ $country->id }}">{{ $country->name }}</option>
								@endif
						   @endforeach
						</select>
					</div>
					@if($errors->has('avatar'))
						<p class="error" role="alert">
							<strong>{{ $errors->first('avatar') }}</strong>
						</p>
					@endif
					<div class="campo">
						<input type="file" name="avatar" value="<?= isset($_FILES["avatar"]["name"]) ? $_FILES["avatar"]["name"] : "" ?>" accept="image/*">
					</div>
					<div class="campo">
						<button type="submit" form="registro" value="registrarme">Registrarme</button>
						<button type="reset" form="registro" value="reset">Borrar</button>
					</div>
				</form>
			</section>
		</article>
	</main>
@endsection

@section('scripts')
	<script src="/js/select.js"></script>
	<script src="/js/parsley.min.js"></script>
@endsection