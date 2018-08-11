@extends('layout')

@section('contenido')

<h1>Contactos</h1>
<h2>Escríbeme</h2>

@if( session()->has('info'))
	<h3>{{ session('info') }}</h3>

@else

<form method="POST" action="{{ route('mensajes.store') }}">

	{!! csrf_field() !!}
	
	<label for="nombre">nombre
	<input class="form-control" type="text" name="nombre" value="{{ old('nombre') }}">
	{!! $errors->first('nombre','<span class=error>:message</span>') !!}
	</label><br><br>

	<label for="email">Email
	<input class="form-control" type="email" name="email" value="{{ old('email') }}">
	{!! $errors->first('email','<span class=error>:message</span>') !!}
	</label><br><br>
	
	<label for="mensaje">Mensaje
	<textarea class="form-control" name="mensaje">{{ old('mensaje') }}</textarea> 
	{!! $errors->first('mensaje','<span class=error>:message</span>') !!}
	</label><br><br>

	<input class="btn btn-primary" type="submit" value="Enviar">
	<br><br>

</form>
@endif

@stop