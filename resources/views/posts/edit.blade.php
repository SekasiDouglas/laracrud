@extends('posts/master')
@section('content')
<h2 class="my-3">Update a Post</h2>


@if(session()->has('message'))
<div class="alert alert-success">
    {{ session()->get('message') }}

</div>
@endif
<form action="{{ route('posts.update',$post->id) }}" method="post">
    @csrf
    @method('put')
    @if($errors->all())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>

      @endforeach 
    </div>
    @endif

    <div class="form-group">
      <label for="title" >Title</label>
      <input type="text" name="title" class="form-control" placeholder="Enter a post here" id="title" value='{{ $post->title }}'>
    </div>

    <div class="form-group">
      <label for="">Content</label>
      <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info"> Update the post</button>
    </div>
    
</form>
@stop