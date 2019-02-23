@extends('layouts.app')

@section('content')

    @if (Auth::check() === false)
        <p>Welcome to instagram-clone!!</p>
        {!! link_to_route('signup.get', '新規登録') !!}
        {!! link_to_route('login','ログイン') !!}
    @endif

@endsection