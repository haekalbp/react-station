<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('home', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function show(Post $post)
    {
      return view('view',compact('post'));
    }
    
    public function search(Request $request)
    {
        $get_keyword = $request->search_name;
        $posts = Post::where('title', 'LIKE', '%'.$get_keyword.'%')->orWhere('body', 'LIKE', '%'.$get_keyword.'%')->get();
        return view('search', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function adminSearch(Request $request)
    {
        $get_keyword = $request->search_name;
        $posts = Post::where('title', 'LIKE', '%'.$get_keyword.'%')->orWhere('body', 'LIKE', '%'.$get_keyword.'%')->get();
        return view('posts.search', compact('posts'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
