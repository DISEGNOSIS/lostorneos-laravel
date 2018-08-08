<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Repositories\Posts;

//use Carbon\Carbon;


class PostsController extends Controller
{

    public function index(Request $request) {
        $posts = Post::with('category', 'user', 'game', 'tags')->where('active', 1)->orderBy('created_at', 'desc')->paginate(3);
        return view('posts.index', compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug', 'LIKE', $slug)->first();
        if($post->active) {
            return view('posts.show', compact('post'));
        } else {
            Flash::error('El Post no se encuentra activado.');
            return back();
        }
    }

}
