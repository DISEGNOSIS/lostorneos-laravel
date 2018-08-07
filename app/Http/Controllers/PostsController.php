<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Repositories\Posts;

//use Carbon\Carbon;


class PostsController extends Controller
{

    public function index(Request $request) {
        $posts = Post::with('category', 'user', 'game')->orderBy('created_at', 'desc')->paginate(3);
        return view('posts.index', compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug', 'LIKE', $slug)->first();
        return view('posts.show', compact('post'));
    }

}
