@extends('layouts.app')

@section('content')

    <?php $user = Auth::user(); ?>
    {!! link_to_route('contents.create','画像をアップロードする') !!}
    @if(count($contents) > 0)
        @foreach ($contents as $content)
            <ul>
                <li>
                    <!--<div class="well well-lg clearfix col-md-6">-->
                    {!! link_to_route('contents.show', $content->id, ['id' => $content->id]) !!}<br>
                    <img src="/storage/{{ $content->toShareImg }}" alt="" width="300px"><br>
                    {{$user->name}} {{$content->caption}}
                    <!--</div>-->
                </li>
            </ul>
        @endforeach
    @endif
@endsection