<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Inertia\Inertia;

class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $posts = Post::all();
        return Inertia::render('Post/Index', ['posts' => $posts]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return Inertia::render('Post/Create');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $post = new Post($request->all());
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function edit(Post $post)
    {
        return Inertia::render('Post/Edit', ['post' => $post]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request, Post $post)
    {
      $post->update($request->all());
      return redirect()->route('posts.index');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
