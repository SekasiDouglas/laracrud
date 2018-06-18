@extends('posts/master')

@section('content')
<div class="card">
    <div class="card-header">
        <h1>{{ $post->title }}</h1>
    </div>
    <div class="card-body">
        <p>
            {{ $post->content }}
        </p>
    </div>
</div>
@stop