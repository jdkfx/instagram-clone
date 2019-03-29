@extends('layouts.app')

@section('content')
    
    <div class="jumbotron">
        <div class="text-center">

            <h3>編集</h3>

            <img src="/storage/{{ $content->toShareImg }}" alt="">    
            {!! Form::model($content, ['route' => ['contents.update',$content->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('caption','説明') !!}
                    {!! Form::textarea('caption',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('tag','タグ') !!}
                    {!! Form::text('tag',null,['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('更新',['class' => 'btn btn-block']) !!}
                
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection