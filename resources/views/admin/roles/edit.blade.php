@extends('layouts.admin')

@section('title')
    Administración | Roles - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-roles-edit">Guardar</button>
            <a href="{{ route('admin.roles') }}">Cancelar</a>
        </div>
        <h1>Editar un Rol</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-roles-edit" action="{{ route('admin.roles.update', $role->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="campo">
                    <label for="display_name">Nombre:</label>
                    <input id="display_name" type="text" class="{{ $errors->has('display_name') ? ' is-invalid' : '' }}" name="display_name" value="{{ $role->display_name ? $role->display_name : old('display_name') }}" placeholder="Título" autofocus/>
                    @if($errors->has('display_name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('display_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <label for="name">Slug:</label>
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $role->name ? $role->name : old('name') }}" placeholder="Slug" autofocus disabled/>
                    @if($errors->has('name'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <label for="description">Descripción:</label>
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" autofocus>{{ $role->description ? $role->description : old('description') }}</textarea>
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
                            <input type="checkbox" name="permissions[]" value="{{ $permission->id }}" {{ $role->permissions->contains($permission->id) ? 'checked="checked"' : '' }}>
                            <span class="check-box"></span>
                        </label>
                    @endforeach
                </div>
            </form>
        </section>
	</article>
@endsection