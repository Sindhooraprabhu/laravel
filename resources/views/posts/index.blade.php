@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-6 mb-4 post-item" id="post-{{ $post->id }}">
                <div class="card shadow-sm">
                    @if($post->image)
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="Post Image" style="height: 250px; object-fit: cover;">
                    @endif
                    <div class="card-body">
                        <h3 class="post-title">{{ $post->title }}</h3>
                        <p class="post-body">{{ $post->body }}</p>

                        <!-- Delete button to hide post from UI only -->
                        <button onclick="removePost({{ $post->id }})" class="btn btn-danger">
                            Delete 
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <script>
        function removePost(postId) {
            const postElement = document.getElementById('post-' + postId);
            if(postElement) {
                postElement.style.display = 'none'; // hides the post from UI
            }
        }
    </script>
@endsection
