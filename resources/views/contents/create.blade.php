@extends('layouts.app')

@section('content')

    <h1>Share the images</h1>
    {!! Form::model($content,['route' => 'contents.store']) !!}
    
        {!! Form::label('caption','Write the caption.') !!}
        {!! Form::text('caption') !!}
        
        {!! Form::submit('share') !!}
        
    {!! Form::close() !!}

@endsection