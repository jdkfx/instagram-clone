@extends('layouts.app')

@section('content')
    
    <div class="jumbotron">
        <div class="text-center">
        
        <p>新規登録</p>
        
        {!! Form::open(['route'=>'signup.post']) !!}
        
            <div class="form-group">
                {!! Form::label('name', '名前') !!}
                {!! Form::text('name', old('name'),['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::email('email', old('email'),['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::password('password',['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('password_confirmation', 'パスワード確認') !!}
                {!! Form::password('password_confirmation',['class' => 'form-control']) !!}
            </div>
            
            {!! Form::submit('登録',['class' => 'btn btn-block']) !!}
            
        {!! Form::close() !!}
        
        </div>
    </div>

@endsection