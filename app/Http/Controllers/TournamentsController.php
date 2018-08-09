<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tournament;
use App\Game;
use App\User;
use App\Country;
use Carbon\Carbon;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Auth;


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

    public function user($id) {
        $user = User::findOrFail($id);
        $tournaments = $user->tournaments()->with('country', 'game', 'teams', 'tags')->paginate(4);
        return view('tournaments.user', compact('tournaments'));
    }

    public function create() {
        $games = Game::all();
        $countries = Country::all();
        return view('tournaments.create', compact('games', 'countries'));
    }

    public function store(Request $request) {
        $this->validate(request(), [
            'name' => 'required|string|min:3|max:255',
            'game' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'prize' => 'max:255',
            'start' => 'string|max:255',
            'end' => 'string|max:255',
            'image' => 'image',
        ]);

        $tournament = new Tournament();
        $tournament->name = $request->name;
        $tournament->information = $request->information;
        $tournament->game_id = $request->game;
        $tournament->country_id = $request->country;
        $tournament->user_id = Auth::user()->id;
        $tournament->start = Carbon::parse($request->start)->year . '-' . Carbon::parse($request->start)->month . '-' . Carbon::parse($request->start)->day . ' 23:00:00';
        $tournament->end = Carbon::parse($request->end)->year . '-' . Carbon::parse($request->end)->month . '-' . Carbon::parse($request->end)->day . ' 23:00:00';

        if($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $request->file('image')->extension();
            $newName = uniqid() . "." . $extension;
            $image->storeAs('public/img/tournaments', $newName);
            $tournament->image = $newName;
        }

        if($request->prize) {
            $tournament->prize = $request->prize;
        }
        
        if($tournament->save()) {
            Flash::success("El Torneo $tournament->name se ha creado con éxito.");
            return redirect()->route('my-account');
        } else {
            Flash::error("El Torneo no se ha podido guardar. Por favor intentalo nuevamente.");
            return back();
        }
    }
}
