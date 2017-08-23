@extends('layouts.master')

@section('title')
	<title>uppercase!</title>
@stop

@section('content')
	<h1>You entered: {{$string}} </h1>
	<h1>Uppercased: {{$uppercase}} </h1>
@stop