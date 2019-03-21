<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Content;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'message' => 'required|max:191',
            ]);
            
        
        Comment::create([
            'user_id' => $request->user()->id,
            'content_id' => $request->content_id,
            'message' => $request->message,
            ]);
        
        return redirect()->back();
    }
}
