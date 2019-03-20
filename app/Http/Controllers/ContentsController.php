<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Content;
use App\Comment;
use App\Userdetail;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        if (\Auth::check()){
            $user = \Auth::user();
            $userdetail = Userdetail::find($user->id);
            $contents = $user->contents()->orderBy('created_at', 'desc')->get();
            
            if(isset($userdetail->profileImg)){
                if (\Auth::id() === $user->id) {
                $userdetail->profileImg = Userdetail::latest('updated_at')->value('profileImg');
                }
            }
            
            $data = [
                'user' => $user,
                'userdetail' => $userdetail,
                'contents' => $contents,
                ];
            
            return view('contents.index',$data);    
        } else {
            return view('welcome');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $content = new Content;
        
        return view('contents.create',[
            'content' => $content,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'caption' => 'required|max:191',
            'toShareImg' => 'required|file|image',
            ]);
        
        $path = $request->toShareImg->store('contents');
        
        $request->user()->contents()->create([
            'toShareImg' => $path,
            'caption' => $request->caption,
            ]);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::find($id);
        $comments = Comment::where('content_id',$content->id)->get();
        
        return view('contents.show',[
            'content' => $content,
            'comments' => $comments,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content = Content::find($id);
        
        return view('contents.edit',[
            'content' => $content,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'caption' => 'required|max:191',
            ]);
        
        $content = Content::find($id);
        $content->caption = $request->caption;
        $content->save();
        
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);
        $content->delete();
        
        return redirect('/');
    }
}
