<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Team;
use App\User;

//use Carbon\Carbon;


class TeamsController extends Controller
{

    public function index(Request $request) {
        $teams = Team::with('country')->orderBy('score', 'desc')->paginate(12);
        return view('teams.index', compact('teams'));
    }

    public function show($slug) {
        $team = Team::with('country', 'users')->where('name', 'LIKE', $slug)->first();
        return view('teams.show', compact('team'));
    }

}
