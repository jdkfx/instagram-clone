@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="text-center">
            
            <p>ログイン</p>
            
            {!! Form::open(['route' => 'login.post']) !!}
            
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'),['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password',['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログイン',['class' => 'btn btn-block']) !!}
                
            {!! Form::close() !!}
            
        </div>
    </div>
    
@endsection