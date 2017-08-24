@extends('layouts.master')

@section('title')
	<title>lowercase!</title>
@stop

@section('content')
	<h1>You entered: {{$string}} </h1>
	<h1>Uppercased: {{$lowercase}} </h1>
@stop

@section('links')
	<a href="{{action('HomeController@uppercase', array($string))}}">Uppercase Me!</a>
@stop