@extends('layouts.default')

@section('title')
    Los Torneos - Noticias.
@endsection

@section('head')
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>
        <h1 class="titulo">Noticias</h1>
        @if($posts->count() > 0)
            <div class="blog-main">
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">
                            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                        <div class="blog-post-info">
                            <span class="blog-post-category"><a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a></span>
                            <span class="blog-post-meta">
                                {{ $post->user->username }} ::
                                {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                            </span>
                        </div>
                        @if($post->image)
                            <div class="centrar">
                                <a href="{{ route('posts.show', $post->slug) }}">
                                    <img src="{{ asset('storage/img/posts/' . $post->image) }}" class="image" alt="{{ $post->title }}"/>
                                </a>
                            </div>
                        @endif
                        <div class="fr-view">
                            {!! str_limit(strip_tags($post->content), 333) !!}
                        </div>
                        <div class="blog-post-footer">
                            <div class="tags">
                                @foreach($post->tags as $tag)
                                    <p class="blog-post-tag">{{ $tag->name }}</p>
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
        @else
            <h2>No se han encontrado posts</h2>    
        @endif
    </article>
    <div id="pagination">
        @if($posts->count() > 0)
            {{ $posts->links() }}
        @endif
    </div>
@endsection

{{-- @section('scripts')
    <script src="{{ asset('js/ajax-posts.js') }}"></script>
@endsection --}}