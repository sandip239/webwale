<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function BlogView()
    {
        $topSection = Blog::select('id', 'title', 'image', 'updated_at')
            ->orderBy('created_at', 'desc')
            ->limit(6)
            ->get();
        $randomBlogs = Blog::select('id', 'title', 'image', 'updated_at')
            ->inRandomOrder()
            ->limit(2)
            ->get();
        $randomBlogsthree = Blog::select('id', 'title', 'image', 'content', 'updated_at')
            ->inRandomOrder()
            ->limit(3)
            ->get();
        $randomBlogsnine = Blog::select('id', 'title', 'image', 'content', 'updated_at')
            ->inRandomOrder()
            ->limit(9)
            ->get();
        $lastFourBlogs = Blog::select('id', 'title', 'image', 'content', 'updated_at')
            ->orderBy('updated_at', 'desc') // Order by updated_at in descending order
            ->limit(4) // Limit to the last 4 entries
            ->get();

        return view('user.index', compact('topSection', 'randomBlogs', 'randomBlogsthree', 'randomBlogsnine','lastFourBlogs'));
    }

    public function index($id)
    {
        $blogPosts = Blog::find($id);
        $randomBlogsthree = Blog::select('id', 'title', 'image', 'content', 'updated_at')
        ->inRandomOrder()
        ->limit(3)
        ->get();
        return view('user.blog_page', compact('blogPosts','randomBlogsthree'));
    }
}