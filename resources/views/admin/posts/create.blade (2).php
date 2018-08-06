@extends('layouts.default')

@section('title')
    My Blog - Publish a Post
@endsection

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Publish a Post</h1>
        <hr>
        <form method="POST" action="/posts">
            @csrf
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" class="form-control" id="title" name="title" required />
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" required /></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            @include('layouts.errors')
        </form>        
    </div>
@endsection