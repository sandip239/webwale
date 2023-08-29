<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class admincontroller extends Controller
{
    public function index()
    {
        $blogPosts = Blog::select('id','title', 'image', 'created_at', 'updated_at')->get();
        return view('admin.index', compact('blogPosts'));
    }

    

  

   
}
