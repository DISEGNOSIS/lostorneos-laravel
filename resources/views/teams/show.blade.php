@extends('layouts.default')

@section('title')
    Los Torneos - {{ $team->display_name }}
@endsection

@section('head')
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>
        <div class="tournament-main">
            <div class="tournament show">
                <div class="col-3">
                    <h2 class="tournament-title">
                        <a href="{{ route('teams.show', $team->name) }}">{{ $team->display_name }}</a>
                    </h2>
                    @if($team->image)
                        <div class="centrar">
                            <a href="{{ route('teams.show', $team->name) }}">
                                <img src="{{ asset('storage/img/teams/' . $team->image) }}" class="image" alt="{{ $team->name }}"/>
                            </a>
                        </div>
                    @endif
                    <span><img src="{{ asset('img/flags/' . $team->country->flag) }}" class="image" alt="{{ $team->country->name }}"/></span>

                                        

                </div>
                <div class="fr-view">
                    {!! $team->description !!}
                </div>
                <div class="tournament-teams">
                    <h3>JUGADORES:</h3>
                    <div class="tournament-teams-data">
                        @foreach($team->users as $user)
                            <div class="tournament-team-data">
                                <h2>{{-- <a href="{{ route('teams.show', $team->name) }}"> --}}{{ $user->username }}{{-- </a> --}}</h2>
                                <img src="{{ asset('storage/img/avatar/' . $user->avatar) }}" class="image" alt="{{ $user->username }}"/>
                                <div class="tournament-footer">
                                    <span class="flag"><img src="{{ asset('img/flags/' . $user->country->flag) }}" class="image-flag" alt="{{ $user->country->name }}"/></span>
                                    <p><i class="fas fa-gamepad"></i>&nbsp; {{ $user->score }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
	</article>
@endsection