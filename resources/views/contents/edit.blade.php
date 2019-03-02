@extends('layouts.app')

@section('content')

    <h1>投稿の編集</h1>
    
    {!! Form::model($content, ['route' => ['contents.update',$content->id], 'method' => 'put']) !!}
        
        {!! Form::label('toShareImg','画像')!!}
        {!! Form::file('toShareImg') !!}
        
        {!! Form::label('caption','説明') !!}
        {!! Form::text('caption') !!}
        
        {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection