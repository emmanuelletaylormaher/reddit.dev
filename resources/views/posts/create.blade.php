@extends('layouts.master')

@section('title')
	<title>Create a thing!</title>

@stop

@section('content')

	<main class="container">
		<h1>Create a thing!!!</h1>
		<form method="POST" action="{{action('PostsController@store')}}">
			{!! csrf_field() !!}
			Title: <input class="form-control" type="text" name="title" placeholder="enter title here..." value="{{ old('title') }}">
			Content: <textarea class="form-control" type="textarea" name="content" rows="4" cols="20" >{{ old('content') }}</textarea>
			URL: <input class="form-control" type="text" name="url" placeholder="enter url here..." value="{{ old('url') }}">
			{{ method_field('POST')}}
			<input class="btn-success btn" type="submit">
		</form>

	</main>


@stop