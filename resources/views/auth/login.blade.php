@extends('layout')


@section('contenido')

	<h1>Login</h1>

	<form class="form-inline" method="POST" action="/login">

		{!! csrf_field() !!}
		
		<input class="form-control" type="email" name="email" placeholder="email"><br><br>
		<input class="form-control" type="password" name="password" placeholder="password"><br><br>
		<input class="btn btn-primary "type="submit" value="Entrar">

	</form>
	<br>

@stop