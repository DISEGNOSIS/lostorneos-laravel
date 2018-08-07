@extends('layouts.admin')

@section('title')
    Administración | Roles - Los Torneos
@endsection

@section('content')
	<article>
        <div class="editar">
            <a href="{{ route('admin.roles.edit', $role->id) }}">Editar</a>
        </div>
        <h1>Detalles del Rol: {{ $role->display_name }}</h1>
        <section>
            <div class="mi-cuenta">
                <div class="datos-usuario">
                    <h2>ID: &nbsp; <span>{{ $role->id }}</span></h2>
                    @if($role->description)
                        <h2>Descripción: &nbsp; <span>{{ $role->description }}</span></h2>
                    @endif
                </div>
            </div>
            @if($role->permissions->count() > 0)
                <h2>Permisos:</h2>
                <div class="datos-checkbox">
                    @foreach($role->permissions as $r)
                        <label class="container">{{ $r->display_name }}
                            <input type="checkbox" checked="checked" disabled>
                            <span class="check-box"></span>
                        </label>
                    @endforeach
                </div>
            @endif
        </section>
	</article>
@endsection