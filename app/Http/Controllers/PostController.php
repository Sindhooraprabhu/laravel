<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of posts.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new post.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created post in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validate input fields including image
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('title', 'body');

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $data['image'] = 'uploads/' . $filename;
        }

        // Create a new Post using mass assignment
        Post::create($data);

        // Redirect to the posts list page after successful creation
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
    public function destroy(Post $post)
{
    // Delete the image file from public/uploads folder if it exists
    if ($post->image && file_exists(public_path($post->image))) {
        unlink(public_path($post->image));
    }

    // Delete the post record from the database
    $post->delete();

    return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
}

}
