@extends('layouts.app')

@section('content')

    <h1>Edit page of id={{ $content->id }}</h1>
    
    {!! Form::model($content, ['route' => ['contents.update',$content->id], 'method' => 'put']) !!}
        
        {!! Form::label('caption','Edit the caption') !!}
        {!! Form::text('caption') !!}
        
        {!! Form::submit('update') !!}
        
    {!! Form::close() !!}

@endsection