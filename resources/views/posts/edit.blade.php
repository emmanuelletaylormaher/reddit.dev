@extends('layouts.master')

@section('title')
	<title>Edit a post!</title>

@stop


@section('content')
	<main class="container">
		<h1>Edit your thing!!</h1>
		<form method="POST" action="{{action('PostsController@update')}}">
			{!! csrf_field() !!}
			Title: <input type="text" name="title" class="form-control" placeholder="enter title here..." value="{{old('title')}}">

			Content: <textarea name="content" class="form-control" rows="4" cols="20" value="">{{old('content')}}</textarea>
			
			URL: <input type="text" name="url" class="form-control" placeholder="enter url here..." value="{{old('url')}}">
			{{ method_field('PUT')}}
			<input class="btn btn-success" type="submit">
		</form>

		<form method='POST' action="{{action('PostsController@destroy', array(2))}}">
			{!! csrf_field() !!}
			<button class="btn btn-danger">Delete Post</button>
			{{ method_field('DELETE')}}
		</form>
	</main>

@stop