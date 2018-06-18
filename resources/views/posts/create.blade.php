@extends('posts/master')
@section('content')
<h2 class="my-3">Add a Post</h2>
<form action="{{ route('posts.store') }}" method="post">
    @csrf
    @if($errors->all())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>

      @endforeach 
    </div>
    @endif

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter a post here" id="title">
    </div>

    <div class="form-group">
      <label for="">Content</label>
      <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info"> Add a post</button>
    </div>
    
</form>
@stop