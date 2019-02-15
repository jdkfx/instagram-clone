@extends('layouts.app')

@section('content')

    <h1>Share the images</h1>
    {!! Form::model($content,['route' => 'contents.store', $content->toShareImg ,'files' => true]) !!}
    
        {!! Form::label('toShareImg','Image')!!}
        {!! Form::file('toShareImg') !!}
    
        {!! Form::label('caption','Write the caption.') !!}
        {!! Form::text('caption') !!}
        
        {!! Form::submit('share') !!}
        
    {!! Form::close() !!}

@endsection