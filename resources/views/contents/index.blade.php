@extends('layouts.app')

@section('content')

    <h1>Index of contents</h1>
    <?php $user = Auth::user(); ?>
    {!! link_to_route('users.show',$user->name,['id' => Auth::id()]) !!}
    {!! link_to_route('contents.create','Share the images') !!}
    @if(count($contents) > 0)
        <ul>
            @foreach ($contents as $content)
                <li>{!! link_to_route('contents.show', $content->id, ['id' => $content->id]) !!}<br><img src="/storage/{{ $content->toShareImg }}" alt=""><br>{{$content->caption}}</li>
            @endforeach
        </ul>
    @endif
    {!! link_to_route('logout.get','Log out') !!}
@endsection