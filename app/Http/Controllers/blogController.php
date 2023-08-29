<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class blogController extends Controller
{

    public function blogEditor(Request $request)
    {
        if ($request->isMethod('post')) {

            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'content' => 'required',
                'image' => 'required',
                'main_description' => 'required',
            ]);
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('main_image'), $filename);

            Blog::create([
                'title' => $validatedData['title'],
                'content' => $validatedData['content'],
                'main_description' => $validatedData['main_description'],
                'image' => $filename,
            ]);

            return redirect()->route('admin-index'); // Redirect to blog page after saving
        }
        return view('admin.add_new');
    }


    public function blogEdit($id)
    {
        $blogData = Blog::find($id);

        return view('admin.add_new', compact('blogData'));
    }
    // temory function

}