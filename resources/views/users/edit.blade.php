@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ユーザー情報の編集</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::model($user, ['route' => ['users.update',$user->id] , 'method' => 'put' ,'files'=> true]) !!}
                
                <div class="form-group">
                    {!! Form::label('profileImg','プロフィール画像')!!}
                    {!! Form::file('profileImg') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('profileText','自己紹介') !!}
                    {!! Form::text('profileText',null,['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('保存') !!}
                
            {!! Form::close() !!}
        </div>
    </div>

@endsection