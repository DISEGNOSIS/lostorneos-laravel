@extends('layouts.admin')

@section('title')
    Administración | Permisos - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-permissions-create">Guardar</button>
            <a href="{{ route('admin.permissions') }}">Cancelar</a>
        </div>
        <h1>Crear un Permiso</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-permissions-create" action="{{ route('admin.permissions.store') }}" method="POST">
                @csrf
                @if($errors->has('display_name'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('display_name') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <input id="display_name" type="text" class="{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ old('display_name') }}" placeholder="Título" autofocus/>
                </div>
                @if($errors->has('description'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('description') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Descripción" autofocus>{{ old('description') }}</textarea>
                </div>
            </form>
        </section>
	</article>
@endsection