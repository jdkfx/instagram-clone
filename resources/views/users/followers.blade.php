@extends('layouts.app')

@section('content')

@if(isset($users))
<ul>
    @foreach($users as $user)
    <li>
        {!! link_to_route('users.show',$user->name,['id' => $user->id]) !!}
    </li>
    @endforeach
</ul>
@endif

@endsection