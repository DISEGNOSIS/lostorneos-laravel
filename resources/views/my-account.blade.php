@extends('layouts.default')

@section('title')
    Mi Cuenta en Los Torneos.
@endsection

@section('content')
    <main>
		<article>
			<div class="editar">
				<a 	href="editar-cuenta.php">Editar</a>
			</div>
			<h1>Mi Cuenta</h1>
			<section class="formulario">
                <div class="mi-cuenta">
                    <img src="{{ asset('storage/img/avatar/' . Auth::user()->avatar) }}" alt="Foto Perfil" class="imagen-usuario" />
                    <div class="datos-usuario">
                        <h2>Usuario: &nbsp; <span>{{ Auth::user()->username }}</span></h2>
                        <h2>e-Mail: &nbsp; <span>{{ Auth::user()->email }}</span></h2>
                        <h2>País: &nbsp; <span>{{ Auth::user()->country->name }}</span></h2>
                    </div>
                </div>
			</section>
		</article>
	</main>
@endsection