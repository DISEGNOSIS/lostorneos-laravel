@extends('layouts.admin')

@section('title')
    Administración | Tags - Los Torneos
@endsection

@section('content')
	<article>
        <div class="botones">
            <button type="submit" form="admin-tags-create">Guardar</button>
            <a href="{{ route('admin.tags') }}">Cancelar</a>
        </div>
        <h1>Crear un Tag</h1>
        @include('flash::message')
        <section class="formulario">
            <form id="admin-tags-create" action="{{ route('admin.tags.store') }}" method="POST">
                @csrf
                @if($errors->has('name'))
                    <p class="error" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </p>
                @endif
                <div class="campo">
                    <input id="name" type="text" class="{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus required/>
                </div>
            </form>
        </section>
	</article>
@endsection