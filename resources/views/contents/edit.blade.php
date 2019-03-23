@extends('layouts.app')

@section('content')
    
    <div class="text-center">
        <h1>投稿の編集</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <img src="/storage/{{ $content->toShareImg }}" alt="" width="400px">    
            {!! Form::model($content, ['route' => ['contents.update',$content->id], 'method' => 'put']) !!}
                
                <div class="form-group">
                    {!! Form::label('caption','説明') !!}
                    {!! Form::textarea('caption',null,['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('tag','タグ') !!}
                    {!! Form::text('tag',null,['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('更新') !!}
                
            {!! Form::close() !!}
            
        </div>
    </div>

@endsection