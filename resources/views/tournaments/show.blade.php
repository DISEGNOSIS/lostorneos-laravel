@extends('layouts.default')

@section('title')
    Los Torneos - {{ $tournament->name }}
@endsection

@section('head')
    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. -->
    <link href="../css/froala_style.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
	<article>
        <div class="tournament-main">
            <div class="tournament show">
                <h2 class="tournament-title">
                    <a href="{{ route('tournaments.show', $tournament->slug) }}">{{ $tournament->name }}</a>
                </h2>
                <div class="tournament-info">
                    <span class="tournament-game"><a href="{{ route('tournaments.games.show', $tournament->game->slug) }}">{{ $tournament->game->name }}</a></span>
                    <span><img src="{{ asset('img/flags/' . $tournament->country->flag) }}" class="image" alt="{{ $tournament->country->name }}"/></span>
                </div>
                <div class="col-3">
                    <div class="tags">
                        @foreach($tournament->tags as $tag)
                            <p class="tournament-tag"><a href="{{ route('tournaments.tags.show', $tag->slug) }}">{{ $tag->name }}</a></p>
                        @endforeach
                    </div>
                    @if($tournament->image)
                        <div class="centrar">
                            <a href="{{ route('tournaments.show', $tournament->slug) }}">
                                <img src="{{ asset('storage/img/tournaments/' . $tournament->image) }}" class="image" alt="{{ $tournament->name }}"/>
                            </a>
                        </div>
                    @endif
                    <div class="dates">
                        @if($tournament->prize)
                            <div class="tournament-price">
                                <i class="fas fa-trophy"></i>&nbsp; ${{ $tournament->prize }}
                            </div>
                        @endif
                        <p class="tournament-meta"><i class="far fa-calendar-alt"></i>&nbsp; 
                            Inicio: {{ \Carbon\Carbon::parse($tournament->start)->format('d-m-Y H:i') }}hs
                        </p>
                        <p class="tournament-meta"><i class="far fa-calendar-alt"></i>&nbsp; 
                            Fin: {{ \Carbon\Carbon::parse($tournament->end)->format('d-m-Y H:i') }}hs
                        </p>
                    </div>
                </div>
                <div class="fr-view">
                    {!! $tournament->information !!}
                </div>
                <div class="tournament-teams">
                    <h3>EQUIPOS:</h3>
                    <div class="tournament-teams-data">
                    @foreach($tournament->teams as $team)
                        <div class="tournament-team-data">
                            <h2><a href="{{ route('teams.show', $team->name) }}">{{ $team->display_name }}</a></h2>
                            <a href="{{ route('teams.show', $team->name) }}">
                                <img src="{{ asset('storage/img/teams/' . $team->image) }}" class="image" alt="{{ $team->display_name }}"/>
                            </a>
                            <div class="tournament-footer">
                                <span class="flag"><img src="{{ asset('img/flags/' . $team->country->flag) }}" class="image" alt="{{ $team->country->name }}"/></span>
                                <p><i class="fas fa-gamepad"></i>&nbsp; {{ $team->score }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
	</article>
@endsection