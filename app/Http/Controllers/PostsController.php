<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Repositories\Posts;

//use Carbon\Carbon;


class PostsController extends Controller
{

    public function index(Request $request) {
        $posts = Post::with('category', 'user', 'game', 'comments')->orderBy('created_at', 'desc')->paginate(15);
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }

}
