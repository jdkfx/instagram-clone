@extends('layouts.app')

@section('content')

    <h1>Edit page of id={{ $content->id }}</h1>
    
    {!! Form::model($content, ['route' => ['contents.update',$content->id], 'method' => 'put']) !!}
        
        {!! Form::label('toShareImg','画像を変更する')!!}
        {!! Form::file('toShareImg') !!}
        
        {!! Form::label('caption','説明を変更する') !!}
        {!! Form::text('caption') !!}
        
        {!! Form::submit('update') !!}
        
    {!! Form::close() !!}

@endsection