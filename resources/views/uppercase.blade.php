@extends('layouts.master')

@section('title')
	<title>uppercase!</title>
@stop

@section('content')
	<h1>You entered: {{$string}} </h1>
	<h1>Uppercased: {{$uppercase}} </h1>
@stop

@section('links')
	<a href="{{ action('HomeController@lowercase', array($string))}}">Lowercase Me!</a>
@stop