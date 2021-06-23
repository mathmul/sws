<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(20); // Collection of all posts
        // $posts = Post::get(); // all

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
        ]);

        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body,
        // ]); // This is the same as the one-liner below, but requires 'user_id' in $fillable in Post.php model
        $request->user()->posts()->create($request->only('body'));

        return back();
    }
}
