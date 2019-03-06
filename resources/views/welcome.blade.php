@extends('layouts.app')

@section('content')

    <div class="center jumbotron col-md-6 col-md-offset-3">
        <div class="text-center">
            @if (Auth::check() === false)
                <p>instagram-cloneにようこそ!!</p>
                {!! link_to_route('signup.get', '新規登録',null,['class' => 'btn btn-info btn-block']) !!}
                {!! link_to_route('login','ログイン',null,['class' => 'btn btn-info btn-block']) !!}
            @endif
        </div>
    </div>
@endsection