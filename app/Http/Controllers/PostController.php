<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate();

        return view('welcome',compact('posts'));
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        Alert::success('Hore!', 'Post Created Successfully');
        return redirect()->back();
    }
}
