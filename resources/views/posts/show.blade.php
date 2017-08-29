@extends('layouts.master')

@section('title')
	<title> Showing a Post </title>
@stop

@section('content')
	<main class="container">
		<h1>{{$post->title}}</h1>
		<p>{{$post->content}}</p>
		<p>Created: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}</p>
		<p>Updated at: {{$post->updated_at->setTimezone('America/Chicago')}}</p>
		<p>Author ID: {{$post->created_by}}</p>

		<a href="{{action('PostsController@edit', $post->id)}}">Edit this post</a>
	</main>

@stop