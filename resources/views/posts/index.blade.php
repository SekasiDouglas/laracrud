@extends('posts/master')

@section('content')
        <h1>All Posts</h1>
        @foreach($posts as $post)
        <div class="card mt-4">
            <div class="card-body">
                <h2>
                    <a href="{{ route('posts.show', $post->id) }}">
                        {{$post->title}}
                    </a>
                    <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="post" class="d-inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </h2>
            </div>

        </div>
        @endforeach
        <div class="mt-4">
                {{ $posts->links() }}
        </div>

@endsection 