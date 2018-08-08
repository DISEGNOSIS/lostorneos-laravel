@extends('layouts.admin')

@section('title')
    Administración | Categorías - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-categories-create">Guardar</button>
            <a href="{{ route('admin.categories') }}">Cancelar</a>
        </div>
        <h1>Crear una Categoría</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-categories-create" action="{{ route('admin.categories.store') }}" method="POST">
                @csrf
                @if($errors->has('name'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Título" autofocus required/>
                </div>
            </form>
        </section>
	</article>
@endsection