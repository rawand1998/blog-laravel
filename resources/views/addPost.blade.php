@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                <div class="form-group">
                @csrf
                <label for="exampleInputTitle">Title</label>
                <input type="title" name="title" class="form-control" id="exampleInputTitle" placeholder="Title">
                </div>
                <div class="form-group">
                <label for="exampleInputBody">Body</label>
                <input type="body" name="body" class="form-control" id="exampleInputBody" placeholder="Body">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection