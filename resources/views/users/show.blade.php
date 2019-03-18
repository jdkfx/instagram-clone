@extends('layouts.app')

@section('content')
    
    <img src="/storage/{{ $userdetails->profileImg }}" alt="" width="200px">
    <h3>{{ $userdetails->profileText }}</h3>
    <h3>{{ $user->name }}</h3>
    {!! link_to_route('users.edit','編集',['id' => $user->id]) !!}
    {!! link_to_route('logout.get','ログアウト') !!}

@endsection