<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    // Blog Listing Page
    public function index()
    {
        // Fetch blog posts from DB (optional)
        // $posts = BlogPost::latest()->paginate(10);
        return view('blog.index'); // pass ['posts' => $posts] if using DB
    }

    // Individual Blog Post Page
    public function show($slug)
    {
        // Fetch post by slug
        // $post = BlogPost::where('slug', $slug)->firstOrFail();
        return view('blog.show'); // pass ['post' => $post] if using DB
    }
}
