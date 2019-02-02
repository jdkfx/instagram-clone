@extends('layouts.app')

@section('content')

    <h1>Index of contents</h1>
    
    @if(count($contents) > 0)
        <ul>
            @foreach ($contents as $content)
                <li>{!! link_to_route('contents.show', $content->id, ['id' => $content->id]) !!} : {{$content->caption}}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('contents.create','Share the images') !!}

@endsection