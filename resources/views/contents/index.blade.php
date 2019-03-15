@extends('layouts.app')

@section('content')

    {!! link_to_route('contents.create','画像をアップロードする') !!}
    <ul>
        
        @foreach($contents as $content)
        
        <?php $user = $content->user; ?>
        <li>
            
            <div>
                <img src="/storage/{{ $content->toShareImg }}" alt="" width="400px">
            </div>
            
            <div>
                <p>{!! nl2br(e($user->name)) !!}</p>
                <p>{!! nl2br(e($content->caption)) !!}</p>
                <span class="text-muted">posted at {{ $content->created_at }}</span>
            </div>
            
            @if(Auth::user()->id == $content->user_id)
            {!! link_to_route('contents.edit','編集',['id' => $content->id]) !!}
    
            {!! Form::model($content, ['route' => ['contents.destroy',$content->id], 'method' => 'delete' ]) !!}
                {!! Form::submit('削除') !!}
            {!! Form::close() !!}
            @endif
            
        </li>
        
        @endforeach
        
    </ul>
    
@endsection