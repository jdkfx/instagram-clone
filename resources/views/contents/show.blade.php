@extends('layouts.app')

@section('content')

    <h1>Detail of {{ $content->id }}</h1>
    
    <img src="/storage/{{ $content->toShareImg }}" alt="" width="400px">
    <p>{{ $content->caption }}</p>
    
    {!! link_to_route('contents.edit','Edit',['id' => $content->id]) !!}
    
    {!! Form::model($content, ['route' => ['contents.destroy',$content->id], 'method' => 'delete' ]) !!}
        {!! Form::submit('画像を削除する') !!}
    {!! Form::close() !!}

@endsection