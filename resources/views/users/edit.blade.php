@extends('layouts.app')

@section('content')

    <h1>ユーザー情報の編集</h1>
    
    {!! Form::model($user, ['route' => ['users.update',$user->id] , 'method' => 'put' ,'files'=> true]) !!}
        
        {!! Form::label('profileImg','プロフィール画像')!!}
        {!! Form::file('profileImg') !!}
        
        {!! Form::label('profileText','自己紹介') !!}
        {!! Form::text('profileText') !!}
        
        {!! Form::submit('保存') !!}
        
    {!! Form::close() !!}

@endsection