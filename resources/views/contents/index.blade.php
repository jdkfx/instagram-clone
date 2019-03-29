@extends('layouts.app')

@section('content')

    <div class="text-center">
        {!! link_to_route('contents.create','画像をアップロードする') !!}
    </div>
    
    <ul>
        
        @foreach($contents as $content)
        
        <?php
        $user = App\User::find($content->user_id);
        
        $userdetail = App\Userdetail::find($content->user_id);
        if(isset($userdetail->profileImg)){
            if (\Auth::id() === $user->id) {
            $userdetail->profileImg = App\Userdetail::latest('updated_at')->where('user_id',$user->id)->value('profileImg');
            }
        }
        
        ?>
        <li>
            <div class="wrapper">
                
                @if(isset($userdetail->profileImg))
                <div class="content-top">
                    <img src="/storage/{{ $userdetail->profileImg }}" alt="" width="30px">
                    <p>{!! $user->name !!}</p>
                    <div class="dropdown">
                        <a data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>
                        @include('commons.dropdown')
                    </div>
                </div>
                @else
                <div class="content-top">
                    <img src="/storage/userdetails/00default_profileImg.jpg" alt="" width="30px">
                    <p>{!! $user->name !!}</p>
                    <div class="dropdown">
	                    <a data-toggle="dropdown" role="button" aria-expanded="false">
	                        <i class="fas fa-ellipsis-v"></i>
	                    </a>
                    @include('commons.dropdown')	
                    </div>
                </div>
                @endif
                
                <div class="content-body">
                    <img src="/storage/{{ $content->toShareImg }}" alt="">
                    @include('user_favorite.favorite_button',['content' => $content])
                    <p>{!! nl2br(e($content->caption)) !!}</p>
                    
                    <div class="tag">
                        @if(isset($content->tag))
                        {!! link_to_route('contents.indexOfSearch', '#' . $content->tag ,['tag' => $content->tag]) !!}
                        @endif
                    </div>
                    
                    <div class="posted-at">
                        @include('commons.posted_at')
                    </div>
                    
                </div>
            </div>
        </li>
        
        @endforeach
        
    </ul>
    
@endsection