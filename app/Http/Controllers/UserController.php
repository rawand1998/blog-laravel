<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;

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
    public function register(Request $request){
        $user = new User;
        $user->name=$request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/');
    }
     public function logout(){
         Session::forget('user');
         return redirect('/login');
     }
}
