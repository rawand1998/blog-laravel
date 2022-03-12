<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
  public function  details($id){
       $post = Post::find($id);
       return view('post',compact('post'));

    }
}
