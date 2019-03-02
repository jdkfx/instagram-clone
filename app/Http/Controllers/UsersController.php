<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Userdetail;

class UsersController extends Controller
{
    
    // public function store(Request $request)
    // {
    //     $this->validate($request,[
    //         'profileText' => 'required|max:191',
    //         'profileImg' => 'required|file|image',
    //         ]);
        
    //     $userdetail = new Userdetail;
    //     $userdetail->profileImg = null;
    //     $userdetail->profileText = null;
    //     $path = $request->profileImg->store('userdetails');
    //     $userdetail->profileImg = $path;
    //     $userdetail->profileText = $request->profileText;
    //     $userdetail->save();
        
    //     return redirect('/');
    // }
    
    public function show($id)
    {
        $user = User::find($id);
        $userdetail = $user;
    
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
            ]);
            
        $user = User::find($id);
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
