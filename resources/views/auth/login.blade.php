@extends('layouts.app')

@section('content')

    <h1>Log in</h1>
    {!! Form::open(['route' => 'login.post']) !!}
    
        {!! Form::label('email', 'メールアドレス') !!}
        {!! Form::email('email', old('email')) !!}
        <br>
        {!! Form::label('password', 'パスワード') !!}
        {!! Form::password('password') !!}
        <br>
        {!! Form::submit('ログイン') !!}
        
    {!! Form::close() !!}
    
    <p>新規登録はこちら{!! link_to_route('signup.get', '登録する') !!}</p>
    
@endsection