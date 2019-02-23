@extends('layouts.app')

@section('content')

    @if (Auth::check() === false)
        <p>Welcome to instagram-clone!!</p>
        {!! link_to_route('signup.get', 'Sign up now!') !!}
        {!! link_to_route('login','Log in') !!}
    @endif

@endsection