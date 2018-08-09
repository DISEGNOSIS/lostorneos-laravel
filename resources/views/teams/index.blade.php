@extends('layouts.default')

@section('title')
    Los Torneos - Equipos.
@endsection

@section('content')
	<article>
        <h1 class="titulo">Equipos</h1>
        @if($teams->count() > 0)
            <div class="tournament-main">
                @foreach($teams as $team)
                    <div class="tournament">
                        <h2 class="tournament-title">
                            <a href="{{ route('teams.show', $team->name) }}">{{ $team->display_name }}</a>
                        </h2>
                        @if($team->image)
                        <div class="centrar">
                            <a href="{{ route('teams.show', $team->name) }}">
                                <img src="{{ asset('storage/img/teams/' . $team->image) }}" class="image" alt="{{ $team->display_name }}"/>
                            </a>
                        </div>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <h2>No se han encontrado Equipos</h2>    
        @endif
    </article>
    <div id="pagination">
        @if($teams->count() > 0)
            {{ $teams->links() }}
        @endif
    </div>
@endsection

{{-- @section('scripts')
    <script src="{{ asset('js/ajax-posts.js') }}"></script>
@endsection --}}