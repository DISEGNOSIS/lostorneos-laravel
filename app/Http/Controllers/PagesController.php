<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Tournament;

class PagesController extends Controller
{
    public function index() {
        $games = Game::all();
        $tournaments = Tournament::with('country', 'game', 'teams', 'tags')->orderBy('start')->paginate(4);
        return view('index', compact('games', 'tournaments'));
    }

    public function faq() {
        return view('faq');
    }
}
