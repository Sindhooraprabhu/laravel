@extends('layouts.app')

@section('content')
    <h1>Welcome to My Laravel Blog!</h1>
    <p style="font-size: 1.2em; max-width: 600px; margin: 20px auto;font-style:italic">
Hello and welcome!
This is a space where I share my thoughts, experiences, and stories through my posts. Here you’ll find a variety of articles, beautiful images, and insights on topics I care about.

Feel free to browse through the latest posts, explore different categories, and enjoy the journey. Whether you’re here for inspiration, information, or just to pass time, I hope you find something meaningful.

Thanks for visiting — stay curious and keep exploring!

</p>

<img src="{{ asset('download (1).jpg') }}" alt="Welcome Image" 
     style="width: 100%; max-width: 800px; height: auto; display: block; margin: 0 auto;">

@endsection
