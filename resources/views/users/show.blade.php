@extends('layouts.app')

@section('content')
    
    @if(isset($userdetail->profileText) && isset($userdetail->profileImg))
        <img src="/storage/{{ $userdetail->profileImg }}" alt="" width="200px">
        <h3>{{ $userdetail->profileText }}</h3>
    @else
        <p>プロフィール画像が設定されていません</p>
        <p>自己紹介が設定されていません</p>
    @endif
    <h3>{{ $user->name }}</h3>
    
    @if(Auth::id() == $user->id)
        {!! link_to_route('users.edit','編集',['id' => $user->id]) !!}
        {!! link_to_route('logout.get','ログアウト') !!}
    @endif
    
    @include('user_follow.follow_button', ['user'=> $user])

@endsection