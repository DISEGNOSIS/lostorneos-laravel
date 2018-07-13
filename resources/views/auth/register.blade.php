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
				<form method="post" id="registro" action="{{ route('register') }}" enctype="multipart/form-data">
					@csrf
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
						 <select name="pais">
							<option value="" disabled>País</option>
							<option value="DE">Alemania</option>
							<option value="DZ">Argelia</option>
							<option value="AR" selected>Argentina</option>
							<option value="AM">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="BS">Bahamas</option>
							<option value="BZ">Belice</option>
							<option value="BO">Bolivia</option>
							<option value="BR">Brasil</option>
							<option value="CA">Canadá</option>
							<option value="CL">Chile</option>
							<option value="CN">China</option>
							<option value="CO">Colombia</option>
							<option value="CR">Costa Rica</option>
							<option value="HR">Croacia</option>
							<option value="CU">Cuba</option>
							<option value="DK">Dinamarca</option>
							<option value="EC">Ecuador</option>
							<option value="EG">Egipto</option>
							<option value="SV">El Salvador</option>
							<option value="SI">Eslovenia</option>
							<option value="ES">España</option>
							<option value="US">Estados Unidos</option>
							<option value="EE">Estonia</option>
							<option value="ET">Etiopía</option>
							<option value="PH">Filipinas</option>
							<option value="FI">Finlandia</option>
							<option value="FR">Francia</option>
							<option value="GI">Gibraltar</option>
							<option value="GR">Grecia</option>
							<option value="GL">Groenlandia</option>
							<option value="GP">Guadalupe</option>
							<option value="GT">Guatemala</option>
							<option value="GY">Guayana</option>
							<option value="GF">Guayana Francesa</option>
							<option value="HT">Haití</option>
							<option value="HN">Honduras</option>
							<option value="HU">Hungría</option>
							<option value="IN">India</option>
							<option value="ID">Indonesia</option>
							<option value="IE">Irlanda</option>
							<option value="IS">Islandia</option>
							<option value="IT">Italia</option>
							<option value="JM">Jamaica</option>
							<option value="JP">Japón</option>
							<option value="MX">México</option>
							<option value="MC">Mónaco</option>
							<option value="NI">Nicaragua</option>
							<option value="NO">Noruega</option>
							<option value="NZ">Nueva Zelanda</option>
							<option value="NL">Holanda</option>
							<option value="PA">Panamá</option>
							<option value="PY">Paraguay</option>
							<option value="PE">Perú</option>
							<option value="PL">Polonia</option>
							<option value="PT">Portugal</option>
							<option value="PR">Puerto Rico</option>
							<option value="QA">Qatar</option>
							<option value="UK">Reino Unido</option>
							<option value="DO">República Dominicana</option>
							<option value="RU">Rusia</option>
							<option value="SE">Suecia</option>
							<option value="SW">Suiza</option>
							<option value="UY">Uruguay</option>
							<option value="VE">Venezuela</option>
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