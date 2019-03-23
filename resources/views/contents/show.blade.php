@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>投稿詳細</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <img src="/storage/{{ $content->toShareImg }}" alt="" width="400px">
            <p>{{ $content->caption }}</p>
            <div>
                @if(isset($content->tag))
                    {!! link_to_route('contents.indexOfSearch', '#' . $content->tag ,['tag' => $content->tag]) !!}
                @endif
            </div>
            
            @if(Auth::user()->id == $content->user_id)
            {!! link_to_route('contents.edit','編集',['id' => $content->id]) !!}
        
            {!! Form::model($content, ['route' => ['contents.destroy',$content->id], 'method' => 'delete' ]) !!}
                {!! Form::submit('削除') !!}
            {!! Form::close() !!}
            @endif
            
                <div>
                    {!! Form::open(['route' => ['comments.store',$content->id]]) !!}
            
                    {{ Form::hidden('content_id',$content->id) }}
                
                    <div class="form-group">
                        {!! Form::label('message','コメントを入力してください') !!}
                        {!! Form::textarea('message',old('message'),['class' => 'form-control']) !!}
                    </div>
                
                    {!! Form::submit('コメントする') !!}
                
                    {!! Form::close() !!}
                </div>
            
            @forelse($comments as $comment)
            
                <?php
                    $user = App\User::find($comment->user_id);
                    $userdetail = App\Userdetail::find($comment->user_id);
                ?>
                @if(isset($userdetail->profileImg))
                <div class="well well-sm">
                    <p><img src="/storage/{{ $userdetail->profileImg }}" alt="" width="30px">
                    {!! $user->name !!}：{!! nl2br(e($comment->message)) !!}</p>
                </div>
                @else
                <div class="well well-sm">
                    <p>{!! $user->name !!}：{!! nl2br(e($comment->message)) !!}</p>
                </div>
                @endif
                
            @empty
            
                <p>コメントはまだありません</p>
            
            @endforelse
        </div>
    </div>

@endsection