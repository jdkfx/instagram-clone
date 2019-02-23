@extends('layouts.app')

@section('content')

    <h1>Index of contents</h1>
    <?php $user = Auth::user(); ?>
    {!! link_to_route('users.show',$user->name,['id' => Auth::id()]) !!}
    {!! link_to_route('contents.create','画像をアップロードする') !!}
    @if(count($contents) > 0)
        <ul>
            @foreach ($contents as $content)
                <li>{!! link_to_route('contents.show', $content->id, ['id' => $content->id]) !!}<br><img src="/storage/{{ $content->toShareImg }}" alt="" width="300px"><br>{{$content->caption}}</li>
            @endforeach
        </ul>
    @endif
    {!! link_to_route('logout.get','ログアウト') !!}
@endsection