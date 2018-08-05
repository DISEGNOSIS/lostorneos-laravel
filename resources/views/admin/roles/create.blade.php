@extends('layouts.admin')

@section('title')
    Administración | Roles - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-roles-create">Guardar</button>
            <a href="{{ route('admin.roles') }}">Cancelar</a>
        </div>
        <h1>Crear un Rol</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-roles-create" action="{{ route('admin.roles.store') }}" method="POST">
                @csrf
                <div class="campo">
                    <input id="display_name" type="text" class="{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ old('display_name') }}" placeholder="Título" autofocus/>
                    @if($errors->has('display_name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Slug" autofocus/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" autofocus>{{ old('description') }}</textarea>
                    @if($errors->has('description'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <h2>Permisos:</h2>
                <div class="datos-checkbox">
                    @foreach($permissions as $permission)
                        <label class="container">{{ $permission->display_name }}
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}">
                            <span class="check-box"></span>
                        </label>
                    @endforeach
                </div>
            </form>
        </section>
	</article>
@endsection