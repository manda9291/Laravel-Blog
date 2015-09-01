@extends('layouts.master')

@section('content')
    <h1>Log In</h1>

    {{ Form::open(array('action' => 'HomeController@doLogin')) }}
        
    {{ Form::label('email', 'eMail Address') }}
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
        
    {{ Form::label('password', 'Password') }}
    {{ Form::password('password', array('class' => 'form-control')) }}
            
    {{Form::submit('Login')}}
    {{ Form::close() }}
@stop