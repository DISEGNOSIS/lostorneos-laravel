@extends('layouts.default')

@section('title')
    My Blog - Post
@endsection

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <hr>
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
        {{-- Add a Comment --}} 
        <hr>
        <div class="card">
            <div class="card-block">
                <form method="POST" action="/posts/{{ $post->id }}/comments">
                    @csrf
                    <div class="form-group">
                        <textarea name="body" placeholder="Your comment here..." class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                    @include('layouts.errors')
                </form>
            </div>
        </div>
    </div>
@endsection