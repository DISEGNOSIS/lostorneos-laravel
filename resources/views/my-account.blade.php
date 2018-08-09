@extends('layouts.default')

@section('title')
    Mi Cuenta en Los Torneos.
@endsection

@section('content')
    <main>
		<article>
			<div class="editar">
                <a 	href="{{ route('tournaments.create') }}"><i class="fas fa-plus-square"></i> Crear Torneo</a>
            </div>
            <div class="mis-torneos">
				<a 	href="{{ route('tournaments.user', Auth::user()->id) }}"><i class="fas fa-trophy"></i> Mis Torneos</a>
			</div>
			<h1>Mi Cuenta</h1>
			<section class="formulario">
                <div class="mi-cuenta">
                    <img src="{{ asset('storage/img/avatar/' . Auth::user()->avatar) }}" alt="Foto Perfil" class="imagen-usuario" />
                    <div class="datos-usuario">
                        <h2>Usuario: &nbsp; <span>{{ Auth::user()->username }}</span></h2>
                        <h2>e-Mail: &nbsp; <span>{{ Auth::user()->email }}</span></h2>
                        <h2>País: &nbsp; <span>{{ Auth::user()->country->name }} </span><img src="{{ asset('img/flags/' . Auth::user()->country->flag) }}" alt="{{ Auth::user()->country->name }}"/></h2>
                        @if(Auth::user()->score)
                            <h2>Puntuación: <span>&nbsp; {{ Auth::user()->score }}</span> &nbsp;<i class="fas fa-gamepad"></i></h2>
                        @endif
                        <h2>Rol: &nbsp; <span>{{ Auth::user()->roles[0]->display_name }}</span></h2>
                    </div>
                </div>
			</section>
		</article>
	</main>
@endsection