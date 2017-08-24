@extends('layouts.master')

@section('title')
	<title>increment</title>
@stop

@section('content')
	<h1>increment: {{$number}} </h1>
@stop

@section('links')
	<a href="{{action('HomeController@incrementNumber', array($number))}}">Increment me!</a>
@stop