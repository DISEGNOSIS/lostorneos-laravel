@extends('layouts.admin')

@section('title')
    Administración | Usuarios - Los Torneos
@endsection

@section('content')
	<article>
        <div class="editar">
            <a href="{{ route('admin.users.edit', $user->id) }}">Editar</a>
        </div>
        <h1>{{ $user->username }}</h1>
        <section class="formulario">
            <div class="mi-cuenta">
                <img src="{{ $user->avatar }}" alt="Foto Perfil" class="imagen-usuario" />
                <div class="datos-usuario">
                    <h2>ID: &nbsp; <span>{{ $user->id }}</span></h2>
                    @if($user->name)
                        <h2>Nombre: &nbsp; <span>{{ $user->name }}</span></h2>
                    @endif
                    <h2>e-Mail: &nbsp; <span>{{ $user->email }}</span></h2>
                    <h2>País: &nbsp; <span>{{ $user->country->name }}</span></h2>
                    <h2>Puntos: &nbsp; <span>{{ $user->score }}</span></h2>
                </div>
            </div>
        </section>
	</article>
@endsection