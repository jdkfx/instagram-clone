@if(Auth::id() != $user->id)
    @if(Auth::user()->is_following($user->id))
        {!! Form::open(['route' => ['user.unfollow',$user->id],'method' => 'delete']) !!}
            {!! Form::submit('フォローを外す',['class' => 'btn btn-danger btn-default']) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.follow',$user->id]]) !!}
            {!! Form::submit('フォロー',['class' => 'btn btn-primary btn-default']) !!}
        {!! Form::close() !!}
    @endif
@endif