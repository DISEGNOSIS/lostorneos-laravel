@extends('layouts.admin')

@section('title')
    Administración | Permisos - Los Torneos
@endsection

@section('content')
	<article>
        <div class="editar">
            <a href="{{ route('admin.permissions.edit', $permission->id) }}">Editar</a>
        </div>
        <h1>Detalles del Permiso: {{ $permission->display_name }}</h1>
        <section>
            <div class="mi-cuenta">
                <div class="datos-usuario">
                    <h2>ID: &nbsp; <span>{{ $permission->id }}</span></h2>
                    @if($permission->description)
                        <h2>Descripción: &nbsp; <span>{{ $permission->description }}</span></h2>
                    @endif
                </div>
            </div>
        </section>
	</article>
@endsection