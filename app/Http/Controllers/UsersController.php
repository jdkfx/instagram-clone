<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Userdetail;

class UsersController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $userdetail = Userdetail::find($user->id);
        
        if(isset($userdetail->profileText) && isset($userdetail->profileImg)){
                    $userdetail->profileText = Userdetail::latest('updated_at')->value('profileText');
                    $userdetail->profileImg = Userdetail::latest('updated_at')->value('profileImg');
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
}
