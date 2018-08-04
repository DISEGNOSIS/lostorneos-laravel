@extends('layouts.admin')

@section('title')
    Administración | Roles - Los Torneos
@endsection

@section('content')
	<article>
        <h1>Crear un Rol</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-permissions-create" action="{{ route('admin.permissions.store') }}" method="POST">
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
                    <textarea id="description" class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" autofocus></textarea>
                    @if($errors->has('description'))
                        <span class="error" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="campo">
                    <button type="submit">Guardar</button>
                    <button type="reset">Borrar</button>
                </div>
            </form>
        </section>
	</article>
@endsection