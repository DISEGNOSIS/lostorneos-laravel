@extends('layouts.admin')

@section('title')
    Administración - Los Torneos
@endsection

@section('content')
	<article>
		<h1>Panel de Administración de Los Torneos</h1>
		<section class="juegos">
				@foreach($games as $game)
					<figure><img src="/img/games/{{ $game->image }}" alt="{{ $game->name }}"></figure>
				@endforeach
			</section>
	</article>
@endsection