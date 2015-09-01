@extends ('layouts.master')

@section ('content')

<h1>Create Post!</h1>

{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}
		{{ Form::label ('title', 'Title') }}
		{{ Form::text('title', null, ['class' => 'form-control']) }}
		{{ $errors->first('title', '<p class="help-block">:message</p>')}}

		{{ Form::label('body', 'Body') }}
    	{{ Form::textarea('body', null, ['class' => 'form-control']) }}

		{{ $errors->first('body', '<p class="help-block">:message</p>')}}

		{{Form::submit('Save Post')}}

	{{ Form::close() }}
@stop
