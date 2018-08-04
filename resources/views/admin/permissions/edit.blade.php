@extends('layouts.admin')

@section('title')
    Administración | Permisos - Los Torneos
@endsection

@section('content')
	<article>
        <h1>Editar un Permiso</h1>
        @include('flash::message')
        <div class="botones">
            <button type="submit" form="admin-permissions-edit">Guardar</button>
            <a href="{{ route('admin.permissions') }}">Cancelar</a>
        </div>
        <section class="formulario">
            <form id="admin-permissions-edit" action="{{ route('admin.permissions.update', $permission->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="campo">
                    <input id="display_name" type="text" class="{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ $permission->display_name ? $permission->display_name : old('display_name') }}" placeholder="Título" autofocus/>
                    @if($errors->has('display_name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $permission->name ? $permission->name : old('name') }}" placeholder="Slug" autofocus/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" autofocus>{{ $permission->description ? $permission->description : old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </form>
        </section>
	</article>
@endsection