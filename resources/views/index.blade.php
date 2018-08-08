@extends('layouts.default')

@section('title')
    Los Torneos - Participá o creá tu torneo.
@endsection

@section('content')
    <main>
		<article>
			<h1>¡Torneos eSports!</h1>
			<h2>Participá, Creá, Administrá y Compartí tus Torneos.</h2>
			<section class="juegos">
				@foreach($games as $game)
					<figure><img src="/img/games/{{ $game->image }}" alt="{{ $game->name }}"></figure>
				@endforeach
			</section>
		</article>
	 </main>
@endsection