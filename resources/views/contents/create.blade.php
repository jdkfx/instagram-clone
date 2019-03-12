@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>画像を投稿する</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        
            {!! Form::model($content,['route' => 'contents.store', $content->toShareImg ,'files' => true]) !!}
                
                <div class="form-group">
                    {!! Form::label('toShareImg','画像を選択')!!}
                    {!! Form::file('toShareImg') !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('caption','説明を記入してください') !!}
                    {!! Form::textarea('caption',null,['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('投稿') !!}
                
            {!! Form::close() !!}
        
        </div>
    </div>

@endsection