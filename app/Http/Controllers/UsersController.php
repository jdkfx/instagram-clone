<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Userdetail;
use App\Content;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $userdetail = Userdetail::find($user->id);
        
        if(isset($userdetail->profileText) && isset($userdetail->profileImg)){
            if (\Auth::id() === $user->id) {
                $userdetail->profileText = Userdetail::latest('updated_at')->where('user_id',$user->id)->value('profileText');
                $userdetail->profileImg = Userdetail::latest('updated_at')->where('user_id',$user->id)->value('profileImg');
            }
        }
    
        return view('users.show', [
            'user' => $user,
            'userdetail' => $userdetail,
        ]);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        
        return view('users.edit',[
            'user' => $user,
            ]);
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'profileText' => 'required|max:191',
            'profileImg' => 'required|file|image',
            ]);
            
        $user = User::find($id);
        $userdetail = new Userdetail;
        $userdetail->user_id = $user->id;
        $path = $request->profileImg->store('userdetails');
        $userdetail->profileImg = $path;
        $userdetail->profileText = $request->profileText;
        $userdetail->save();
        
        return view('users.show', [
            'user' => $user,
            'userdetail' => $userdetail,
        ]);
    }
    
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings();
        
        $data = [
            'user' => $user,
            'users' => $followings,
            ];
            
        $data += $this->counts($user);
            
        return view('users.followings',$data);
    }
    
    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers();
        
        $data = [
            'user' => $user,
            'users' => $followers,
            ];
        
        $data += $this->counts($user);
        
        return view('users.followers',$data);
    }
}
