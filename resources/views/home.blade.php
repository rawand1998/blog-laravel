@extends('master')
@section('content')
<div class="conatiner">
    <div class="row">
         <div class="col-sm-4 col-sm-offset-4">
         <div class="card card-post">
@foreach($posts as $post)
  <div class="card-body">
    <h5 class="card-title title">{{$post->title}}</h5>
    <p class="card-text body">{{$post->body}}</p>
    <a href="/details/{{$post->id}}" class="btn btn-primary">Read More</a>
    @endforeach
  </div>
</div>
         </div>
    </div>
</div>

@endsection