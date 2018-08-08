<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class PagesController extends Controller
{
    public function index() {
        $games = Game::all();
        return view('index', compact('games'));
    }

    public function faq() {
        return view('faq');
    }
}
