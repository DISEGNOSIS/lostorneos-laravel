@extends('layouts.admin')

@section('title')
    Administración | Categorías - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-categories-edit">Guardar</button>
            <a href="{{ route('admin.categories') }}">Cancelar</a>
        </div>
        <h1>Editar una Categoría</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-categories-edit" action="{{ route('admin.categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                @if($errors->has('name'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <label for="name">Título:</label>
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $category->name ? $category->name : old('name') }}" placeholder="Título" autofocus/>
                </div>
            </form>
        </section>
	</article>
@endsection