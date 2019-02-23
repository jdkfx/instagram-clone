@extends('layouts.app')

@section('content')

    <h3>{{ $user->name }}</h3>
    {!! link_to_route('logout.get','Log out') !!}

@endsection