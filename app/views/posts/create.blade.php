@extends ('layouts.master')

@section ('content')

<h1>Create Post!</h1>

	{{ Form::open(array('action'=>array('PostsController@store'))) }}
		{{ Form::label ('title', 'Title') }}
		{{ Form::text ('title') }}

		{{ $errors->first('title', '<p class="help-block">:message</p>')}}

		{{ Form::label('body', 'Body') }}
		{{ Form::textarea ('body') }}

		{{ $errors->first('body', '<p class="help-block">:message</p>')}}

		{{Form::submit('Save Post')}}

	{{ Form::close() }}
@stop