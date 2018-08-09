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
        $tournament = Tournament::with('country', 'game', 'teams', 'tags')->where('slug', 'LIKE', $slug)->first();
        return view('tournaments.show', compact('tournament'));
    }

}
