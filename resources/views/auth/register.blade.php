@extends('layouts.app')

@section('content')

<h1>Sign up</h1>

    {!! Form::open(['route'=>'signup.post']) !!}
    
        {!! Form::label('name', '名前') !!}
        {!! Form::text('name', old('name')) !!}
        <br>
        {!! Form::label('email', 'メールアドレス') !!}
        {!! Form::email('email', old('email')) !!}
        <br>
        {!! Form::label('password', 'パスワード') !!}
        {!! Form::password('password') !!}
        <br>
        {!! Form::label('password_confirmation', 'パスワード確認') !!}
        {!! Form::password('password_confirmation') !!}
        <br>
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection