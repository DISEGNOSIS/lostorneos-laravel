@extends('layouts.admin')

@section('title')
    Administración | Categorías - Los Torneos
@endsection

@section('content')
	<article>
        <div class="editar">
            <a href="{{ route('admin.categories.edit', $category->id) }}">Editar</a>
        </div>
        <section>
            <div class="mi-cuenta">
                <div class="datos-usuario">
                    <h2>ID: &nbsp; <span>{{ $category->id }}</span></h2>
                    <h1>{{ $category->name }}</h1>
                </div>
            </div>
        </section>
	</article>
@endsection