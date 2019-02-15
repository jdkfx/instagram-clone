@extends('layouts.app')

@section('content')

    <h1>Detail of {{ $content->id }}</h1>
    
    <p>{{ $content->toShareImg }}</p>
    <img src="/storage/{{ $content->toShareImg }}" alt="">
    <p>{{ $content->caption }}</p>
    
    {!! link_to_route('contents.edit','Edit',['id' => $content->id]) !!}
    
    {!! Form::model($content, ['route' => ['contents.destroy',$content->id], 'method' => 'delete' ]) !!}
        {!! Form::submit('Delete') !!}
    {!! Form::close() !!}

@endsection