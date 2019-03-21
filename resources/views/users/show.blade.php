@extends('layouts.app')

@section('content')
    
    @if(isset($userdetail->profileText) && isset($userdetail->profileImg))
        <img src="/storage/{{ $userdetail->profileImg }}" alt="" width="200px">
        <h3>{{ $userdetail->profileText }}</h3>
        <h3>{{ $user->name }}</h3>
    @else
        <p>プロフィール画像が設定されていません</p>
        <p>自己紹介が設定されていません</p>
        <h3>{{ $user->name }}</h3>
    @endif
    
    
    @if(Auth::id() == $user->id)
        {!! link_to_route('users.edit','編集',['id' => $user->id]) !!}
        {!! link_to_route('logout.get','ログアウト') !!}
    @endif
    
    @include('user_follow.follow_button', ['user'=> $user])
    
    {!! link_to_route('users.followings','フォロー中',['id' => $user->id]) !!}
    {!! link_to_route('users.followers','フォロワー',['id' => $user->id]) !!}


@endsection