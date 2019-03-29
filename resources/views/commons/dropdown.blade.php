<ul class="dropdown-menu" role="menu">
    @if(Auth::user()->id == $content->user_id)
        <li role="presentation">{!! link_to_route('contents.edit','編集',['id' => $content->id]) !!}</li>
        <li role="presentation">
            {!! Form::model($content, ['route' => ['contents.destroy',$content->id], 'method' => 'delete']) !!}
                {!! Form::submit('削除',['style' => 'background-color: transparent;border: none;padding:0;']) !!}
            {!! Form::close() !!}
        </li>
    @endif
	    <li role="presentation">{!! link_to_route('contents.show','詳細を見る',['id' => $content->id]) !!}</li>
</ul>