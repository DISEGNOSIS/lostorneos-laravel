@extends('layouts.default')

@section('title')
    Los Torneos - {{ $category->name }}
@endsection

@section('head')
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>
        <h1 class="titulo">{{ $category->name }}:</h1>
        @if($category->posts->count() > 0)
            <div class="blog-main">
                @foreach($category->posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">
                            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h2>
                        <div class="blog-post-info">
                            <span class="blog-post-category"><a href="{{ route('posts.show', $post->slug) }}">{{ $post->category->name }}</a></span>
                            <span class="blog-post-meta">
                                {{ $post->user->username }} ::
                                {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </span>
                        </div>
                        @if($post->image)
                            <div class="centrar">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <a href="{{ route('posts.show', $post->slug) }}">
                                        <img src="{{ asset('storage/img/posts/' . $post->image) }}" class="image" alt="{{ $post->title }}"/>
                                    </a>
                                </a>
                            </div>
                        @endif
                        <div class="fr-view">
                            {!! str_limit(strip_tags($post->content), 333) !!}
                        </div>
                        <div class="blog-post-footer">
                            <div class="tags">
                                @foreach($post->tags as $tag)
                                    <p class="blog-post-tag"><a href="{{ route('tags.show', $tag->slug) }}">{{ $tag->name }}</a></p>
                                @endforeach
                            </div>
                            @if(strlen(strip_tags($post->content)) > 333)                        
                                <a href="{{ route('posts.show', $post->slug) }}" class="read-more">
                                    <i class="fas fa-arrow-alt-circle-right"></i>
                                </a>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
	</article>
@endsection