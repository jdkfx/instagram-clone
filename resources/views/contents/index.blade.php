@extends('layouts.app')

@section('content')

    <h1>Index of contents</h1>
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
        {!! link_to_route('logout.get','Log out') !!}
    @else
        <p>guest user</p>
        {!! link_to_route('signup.get', 'Sign up now!') !!}
        {!! link_to_route('login','Log in') !!}
    @endif
    
    @if(count($contents) > 0)
        <ul>
            @foreach ($contents as $content)
                <li>{!! link_to_route('contents.show', $content->id, ['id' => $content->id]) !!} : {{$content->caption}}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('contents.create','Share the images') !!}

@endsection