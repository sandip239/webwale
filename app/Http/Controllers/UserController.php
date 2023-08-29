<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function BlogView()
    {
        $topSection = Blog::getDifferentData(6, 'created_at');
        $randomBlogs = Blog::getDifferentData(2, 'id');
        $randomBlogsthree = Blog::getDifferentData(3, 'id');
        $randomBlogsnine = Blog::getDifferentData(9, 'id');
        $lastFourBlogs = Blog::getDifferentData(4, 'updated_at');
    
        return view('user.index', compact('topSection', 'randomBlogs', 'randomBlogsthree', 'randomBlogsnine', 'lastFourBlogs'));
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