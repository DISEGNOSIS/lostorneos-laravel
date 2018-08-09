@extends('layouts.default')

@section('title')
    Los Torneos - Participá o creá tu torneo.
@endsection

@section('content')
    <main>
		<article>
			<h1>¡Torneos eSports!</h1>
			<section class="juegos">
				@foreach($games as $game)
					<figure><img src="/img/games/{{ $game->image }}" alt="{{ $game->name }}"></figure>
				@endforeach
			</section>
		</article>
		<article>
			<h1 class="titulo">Próximos Torneos:</h1>
			@if($tournaments->count() > 0)
				<div class="tournament-main">
					@foreach($tournaments as $tournament)
						<div class="tournament">
							<h2 class="tournament-title">
								<a href="{{ route('tournaments.show', $tournament->slug) }}">{{ $tournament->name }}</a>
							</h2>
							<div class="tournament-info">
								<span class="tournament-game"><a href="{{ route('tournaments.games.show', $tournament->game->slug) }}">{{ $tournament->game->name }}</a></span>
								<span class="tournament-meta">
									{{ \Carbon\Carbon::parse($tournament->start)->diffForHumans() }}
								</span>
							</div>
							@if($tournament->image)
							<div class="centrar">
								<img src="{{ asset('storage/img/tournaments/' . $tournament->image) }}" class="image" alt="{{ $tournament->name }}"/>
							</div>
							@endif
							@if($tournament->prize)
								<div class="tournament-price"><i class="fas fa-trophy"></i>&nbsp; ${{ $tournament->prize }}</div>
							@endif
							<div class="fr-view">
								{!! str_limit(strip_tags($tournament->information), 200) !!}
							</div>
							<div class="tournament-footer">
								<div class="tags">
									@foreach($tournament->tags as $tag)
										<p class="tournament-tag"><a href="{{ route('tournaments.tags.show', $tag->slug) }}">{{ $tag->name }}</a></p>
									@endforeach
								</div>
								@if(strlen(strip_tags($tournament->information)) > 200)                        
									<a href="{{ route('tournaments.show', $tournament->slug) }}" class="read-more">
										<i class="fas fa-arrow-alt-circle-right"></i>
									</a>
								@endif
							</div>
						</div>
					@endforeach
				</div>
			@else
				<h2>No se han encontrado Torneos</h2>    
			@endif
		</article>
	 </main>
@endsection