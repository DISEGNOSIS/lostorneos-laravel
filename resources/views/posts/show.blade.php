@extends('layouts.admin')

@section('title')
    Administración | Noticias - Los Torneos
@endsection

@section('head')
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>
        <div class="editar">
            <a href="{{ route('admin.posts.edit', $post->id) }}">Editar</a>
        </div>
        <h1>{{ $post->title }}</h1>
        <section class="post">
            @if($post->image)
                <img src="{{ asset('storage/img/posts/' . $post->image) }}" class="image" alt="{{ $post->title }}"/>
            @endif
            <div class="fr-view">
                {!! $post->content !!}
            </div>
        </section>
	</article>
@endsection