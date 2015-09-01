@extends ('layouts.master')
@section ('content')

@foreach ($posts as $post)

	<!-- <h2>{{{ $post->title }}}</h2> -->
	<!-- <p> {{{ $post->body }}}</p> -->

	<h2><a href="{{ action('PostsController@show', $post->id) }}">{{ $post->title }}</a></h2>
	<a class='btn btn-default'href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>



	<p>Created on:
		{{{$post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>
	<p>Updated On: 
		{{{$post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i:s A')}}}</p>

@endforeach

<p>{{ $posts->links() }}</p>

@stop