@extends('layouts.app')

@section('content')

    <h1>Log in</h1>
    {!! Form::open(['route' => 'login.post']) !!}
    
        {!! Form::label('email', 'Email') !!}
        {!! Form::email('email', old('email')) !!}
        <br>
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password') !!}
        <br>
        {!! Form::submit('Log in') !!}
        
    {!! Form::close() !!}
    
    <p>New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
    
@endsection