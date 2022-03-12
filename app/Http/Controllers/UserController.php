<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password)){
          
            return "User and password not matched";
        }else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}
