<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tournament;

//use Carbon\Carbon;


class TournamentsController extends Controller
{

    public function index(Request $request) {
        $tournaments = Tournament::with('country', 'game', 'teams', 'tags')->orderBy('start')->paginate(4);
        return view('tournaments.index', compact('tournaments'));
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
