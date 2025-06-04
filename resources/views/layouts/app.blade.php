<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Laravel Blog</title>
    
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    <style>
        body {
            background-color: #f0f8ff; /* Light blue background */
            color: #333;
        }
        nav.navbar {
            background-color: #004080; /* Dark blue nav */
        }
        nav.navbar a.nav-link, nav.navbar .navbar-brand {
            color: #fff !important;
            font-weight: bold;
        }
        nav.navbar a.nav-link:hover {
            color: #ffcc00 !important; /* Gold highlight on hover */
        }
        .post-title {
            color: #004080;
        }
        .post-body {
            font-size: 1.1rem;
            color: #555;
        }
        .footer {
            margin-top: 4rem;
            padding: 1rem 0;
            background-color: #004080;
            color: #fff;
            text-align: center;
        }
        /* Button style */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">MyBlog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Posts</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('posts.create') }}">Create Post</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

<footer class="footer">
    <div class="container">
        &copy; {{ date('Y') }} My Laravel Blog. All rights reserved.
    </div>
</footer>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
