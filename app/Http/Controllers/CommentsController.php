<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'message' => 'required|max:191',
            ]);
            
        $request->user()->comments()->create([
            'message' => $request->message,
            ]);
        
        return redirect()->back();
    }
}
