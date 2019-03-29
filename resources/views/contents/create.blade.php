@extends('layouts.app')

@section('content')
    
    <div class="jumbotron">
        <div class="text-center">
        
        <h3>新規投稿</h3>
        
            {!! Form::model($content,['route' => 'contents.store', $content->toShareImg ,'files' => true]) !!}
                
                <div class="form-group">
                    {!! Form::label('toShareImg','画像を選択')!!}
                    {!! Form::file('toShareImg') !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('caption','説明を記入してください') !!}
                    {!! Form::textarea('caption',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('tag','タグ') !!}
                    {!! Form::text('tag',null,['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿',['class' => 'btn btn-block']) !!}
                
            {!! Form::close() !!}
        
        </div>
    </div>

@endsection