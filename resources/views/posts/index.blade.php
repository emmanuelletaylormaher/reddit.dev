@extends('layouts.master')

@section('title')
	<title>Show All Posts</title>
@stop

@section('content')
	<main class="container">
		<div class="row">
			<h1>Posts</h1>
			@foreach ($posts as $post)
				<div class="col-12">
				<h2><a href="{{action('PostsController@show', $post->id)}}">{{$post->title}}</a> </h2>
				<p>Content: {{$post->content}} </p>
				<p> Created by: {{$post->created_by}} </p>
				<p> Created: {{$post->created_at->setTimezone('America/Chicago')->diffForHumans()}}
				</div>
				@endforeach
		</div>
	</main>
@stop

@section('links')
{!! $posts->render() !!}
@stop