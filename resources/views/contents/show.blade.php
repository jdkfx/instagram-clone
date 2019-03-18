@extends('layouts.app')

@section('content')

    <h1>投稿詳細</h1>
    
    <img src="/storage/{{ $content->toShareImg }}" alt="" width="400px">
    <p>{{ $content->caption }}</p>
    
    {!! link_to_route('contents.edit','編集',['id' => $content->id]) !!}
    
    {!! Form::model($content, ['route' => ['contents.destroy',$content->id], 'method' => 'delete' ]) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
    {!! Form::open(['route' => ['comments.store',$content->id]]) !!}
    
        {{ Form::hidden('content_id',$content->id) }}
        
        {!! Form::label('message','コメントを入力してください') !!}
        {!! Form::textarea('message',old('message')) !!}
        
        {!! Form::submit('コメントする') !!}
        
    {!! Form::close() !!}
    
    @forelse($content->comments as $comment)
    
        <?php $user = $content->user; ?>
        {!! $user->name !!}
        {!! nl2br(e($comment->message)) !!}
        <br>
        
    @empty
    
        <p>コメントはまだありません</p>
    
    @endforelse

@endsection