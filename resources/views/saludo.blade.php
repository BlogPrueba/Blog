@extends('layout')

@section('contenido')

<h1>Saludos a {{ $nombre }}</h1>

<ul>
	@forelse($consolas as $consola)
		<li>{{ $consola }}</li>
	@empty
		<p>Nohay consolas. :(</p>
	@endforelse
</ul>

@stop