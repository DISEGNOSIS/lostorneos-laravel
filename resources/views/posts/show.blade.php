@extends('layouts.default')

@section('title')
    Los Torneos - {{ $post->title }}
@endsection

@section('head')
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>
        <div class="blog-main">
            <div class="blog-post show">
                <h2 class="blog-post-title">
                    <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
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
                        <img src="{{ asset('storage/img/posts/' . $post->image) }}" class="image" alt="{{ $post->title }}"/>
                    </div>
                @endif
                <div class="fr-view">
                    {!! $post->content !!}
                </div>
            </div>
            {{-- <hr>
            <div class="comments">
                <ul class="list-group">
                    @foreach($post->comments as $comment)
                        <li class="list-group-item">
                            <i>{{ $comment->created_at->diffForHumans() }}:&nbsp; </i>
                            {{ $comment->body }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <hr>
            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/posts/{{ $post->id }}/comments">
                        @csrf
                        <div class="form-group">
                            <textarea name="body" placeholder="Your comment here..." class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Comentar</button>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
	</article>
@endsection