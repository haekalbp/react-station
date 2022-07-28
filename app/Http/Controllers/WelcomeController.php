<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('welcome', compact('posts'));
    }

    public function show(Post $post)
    {
      return view('show',compact('post'));
    }

    public function cari(Request $request)
    {
        $get_keyword = $request->search_name;
        $posts = Post::where('title', 'LIKE', '%'.$get_keyword.'%')->orWhere('body', 'LIKE', '%'.$get_keyword.'%')->get();
        return view('cari', compact('posts'));
    }
}
