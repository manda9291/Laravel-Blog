@extends ('layouts.master')
@section ('content')


	<h2>{{{ $post->title }}}</h2>
	<p>{{{$post->body}}}</p>
	<h5>{{ $errors->first('title', '<span class="help-block">:message</span>') }}</h5>



@stop