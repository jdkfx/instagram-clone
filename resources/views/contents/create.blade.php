@extends('layouts.app')

@section('content')

    <h1>Share the images</h1>
    {!! Form::model($content,['route' => 'contents.store', $content->toShareImg ,'files' => true]) !!}
    
        {!! Form::label('toShareImg','画像をアップロードする')!!}
        {!! Form::file('toShareImg') !!}
    
        {!! Form::label('caption','説明を記入してください') !!}
        {!! Form::text('caption') !!}
        
        {!! Form::submit('share') !!}
        
    {!! Form::close() !!}

@endsection