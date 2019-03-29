@extends('layouts.app')

@section('content')

    <div class="jumbotron">
        <div class="text-center">
            @if (Auth::check() === false)
                <p>instagram-clone</p>
                {!! link_to_route('signup.get', '新規登録',null,['class' => 'btn btn-block']) !!}
                {!! link_to_route('login','ログイン',null,['class' => 'btn btn-block']) !!}
            @endif
        </div>
    </div>
@endsection