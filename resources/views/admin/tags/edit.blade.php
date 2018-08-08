@extends('layouts.admin')

@section('title')
    Administración | Tags - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-tags-edit">Guardar</button>
            <a href="{{ route('admin.tags') }}">Cancelar</a>
        </div>
        <h1>Editar un Tag</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-tags-edit" action="{{ route('admin.tags.update', $tag->id) }}" method="POST">
                @csrf
                @method('PUT')
                @if($errors->has('name'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <label for="name">Título:</label>
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $tag->name ? $tag->name : old('name') }}" placeholder="Título" autofocus/>
                </div>
            </form>
        </section>
	</article>
@endsection