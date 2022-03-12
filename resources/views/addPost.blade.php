@extends('master')
@section('content')
<div class="container custom">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="add-post" method="POST">
                <div class="form-group">
                @csrf
                <label for="exampleInputTitle">Title</label>
                <input type="title" name="title" class="form-control input" id="exampleInputTitle" placeholder="Title">
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