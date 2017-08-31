@extends('layouts.master')

@section('title')
	<title> Showing a Post </title>
@stop

@section('content')
	<main class="container">
		<h1>{{$post->title}}</h1>
		<p>{{$post->content}}</p>
		<p>Created: {{$post->created_at}}</p>
		<p>Updated: {{$post->updated_at}}</p>
		<p>Author ID: {{$post->user->name}}</p>

		<a href="{{action('PostsController@edit', $post->id)}}">Edit this post</a>
	</main>

@stop