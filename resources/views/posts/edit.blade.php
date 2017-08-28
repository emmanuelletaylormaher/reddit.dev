@extends('layouts.master')

@section('title')
	<title>Edit a post!</title>

@stop


@section('content')
	<main class="container">
		<h1>Edit your thing!!</h1>
		<form method="POST" action="{{action('PostsController@update', $post->id)}}">
			{!! csrf_field() !!}
			Title: <input type="text" name="title" class="form-control" placeholder="enter title here..." value="{{ $post->title }}">

			Content: <textarea name="content" class="form-control" rows="4" cols="20" value="">{{ $post->content}}</textarea>
			
			URL: <input type="text" name="url" class="form-control" placeholder="enter url here..." value="{{$post->url}}">

			{{ method_field('PUT')}}

			<input class="btn btn-success" type="submit">
		</form>

		<!-- Form to delete this post -->
		<form method='POST' action="{{action('PostsController@destroy', $post->id)}}">
			{!! csrf_field() !!}
			<button class="btn btn-danger">Delete Post</button>
			{{ method_field('DELETE')}}
		</form>
	</main>

@stop