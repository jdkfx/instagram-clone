@extends('layouts.app')

@section('content')

<h1>Sign up</h1>

    {!! Form::open(['route'=>'signup.post']) !!}
    
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', old('name')) !!}
        <br>
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', old('email')) !!}
        <br>
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
        <br>
        {!! Form::label('password_confirmation', 'Password confirmation') !!}
        {!! Form::password('password_confirmation') !!}
        <br>
        {!! Form::submit('Sign up') !!}
        
    {!! Form::close() !!}

@endsection