@if(Auth::user()->is_favorite($content->id))
    {!! Form::open(['route' => ['user.unfavorite', $content->id], 'method' => 'delete']) !!}
        {!! Form::submit('いいね！を外す',['class' => 'btn btn-warning btn-default']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $content->id]]) !!}
        {!! Form::submit('いいね！', ['class' => 'btn btn-success btn-default']) !!}
    {!! Form::close() !!}
@endif