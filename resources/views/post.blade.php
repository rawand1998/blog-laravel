@extends('master')
@section('content')

<div class="conatiner">
    <div class="row">
         <div class="col-sm-4 col-sm-offset-4">
         <div class="card" style="width: 18rem;">

  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->body}}</p>
   
  
  </div>
</div>
         </div>
    </div>
</div>
@endsection