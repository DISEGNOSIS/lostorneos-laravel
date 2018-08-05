@extends('layouts.admin')

@section('title')
    Administración | Roles - Los Torneos
@endsection

@section('content')
	<article>
        <h1>Editar un Rol</h1>
        @include('flash::message')
        <div class="botones">
            <button type="submit" form="admin-roles-edit">Guardar</button>
            <a href="{{ route('admin.roles') }}">Cancelar</a>
        </div>
        <section class="formulario">
            <form id="admin-roles-edit" action="{{ route('admin.roles.update', $rol->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="campo">
                    <input id="display_name" type="text" class="{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ $rol->display_name ? $rol->display_name : old('display_name') }}" placeholder="Título" autofocus/>
                    @if($errors->has('display_name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $rol->name ? $rol->name : old('name') }}" placeholder="Slug" autofocus/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" autofocus>{{ $rol->description ? $rol->description : old('description') }}</textarea>
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