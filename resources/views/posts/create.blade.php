<!-- <!DOCTYPE html>
<html>
<head><title>Create Post</title></head>
<body>
    <h1>Create New Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label><br>
        <input type="text" name="title"><br><br>

        <label>Content:</label><br>
        <textarea name="body"></textarea><br><br>

        <button type="submit">Save Post</button>
    </form>
</body>
</html> -->
@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input 
                type="text" 
                name="title" 
                class="form-control @error('title') is-invalid @enderror" 
                value="{{ old('title') }}" 
                required
            >
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea 
                name="body" 
                class="form-control @error('body') is-invalid @enderror" 
                rows="5" 
                required>{{ old('body') }}</textarea>
            @error('body')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="image" class="form-label"> Image</label>
            <input 
                type="file" 
                name="image" 
                class="form-control @error('image') is-invalid @enderror" 
                accept="image/*"
            >
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
@endsection
