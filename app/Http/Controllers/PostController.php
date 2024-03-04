<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Retrieve paginated posts with associated user using eager loading
        $posts = Post::with('user')->paginate(6); // 6 posts per page

        // Pass the paginated posts to the welcome view
        return view('welcome', compact('posts'));
    }
}
