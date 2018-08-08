@extends('layouts.admin')

@section('title')
    Administración | Tags - Los Torneos
@endsection

@section('content')
	<article>
        <div class="editar">
            <a href="{{ route('admin.tags.edit', $tag->id) }}">Editar</a>
        </div>
        <section>
            <div class="mi-cuenta">
                <div class="datos-usuario">
                    <h2>ID: &nbsp; <span>{{ $tag->id }}</span></h2>
                    <h1>{{ $tag->name }}</h1>
                </div>
            </div>
        </section>
	</article>
@endsection