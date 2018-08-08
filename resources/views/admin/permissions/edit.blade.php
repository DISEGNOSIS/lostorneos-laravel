@extends('layouts.admin')

@section('title')
    Administración | Permisos - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-permissions-edit">Guardar</button>
            <a href="{{ route('admin.permissions') }}">Cancelar</a>
        </div>
        <h1>Editar un Permiso</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-permissions-edit" action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
                @csrf
                @method('PUT')
                @if($errors->has('display_name'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('display_name') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <label for="display_name">Título:</label>
                    <input id="display_name" type="text" class="{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ $permission->display_name ? $permission->display_name : old('display_name') }}" placeholder="Título" autofocus/>
                </div>
                @if($errors->has('description'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <label for="description">Descripción:</label>
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" autofocus>{{ $permission->description ? $permission->description : old('description') }}</textarea>
                </div>
            </form>
        </section>
	</article>
@endsection