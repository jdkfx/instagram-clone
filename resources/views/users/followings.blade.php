@extends('layouts.app')

@section('content')
        <h3>{{ $user->name }}</h3>
    @include('user_follow.follow_button', ['user' => $user])
        <a href="{{ route('users.show', ['id' => $user->id]) }}">TimeLine <span class="badge">{{ $count_microposts }}</span></a>
        <a href="{{ route('users.followings', ['id' => $user->id]) }}">Followings <span class="badge">{{ $count_followings }}</span></a>
        <a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a>
    @include('users.users', ['users' => $users])
@endsection