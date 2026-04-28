<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:11',
            'content' =>'required|min:3|max:11'
        ]);

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', "Succesfuly created a post!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];

        $post->update($data);

        return redirect()->route('posts.index');
    }

    public function duplicate(Post $post)
    {
        $data = [
            'title' => $post->title . " (copy)",
            'content' => $post->content
        ];

        $post->create($data);

        return redirect()->route('posts.index');
    }


    public function statusUpdate(Request $request, Post $post)
    {
        $data = [
            'status' => $request->status
        ];

        $post->status = $request->status;
        $post->save();

        return redirect()->route('posts.show', $post);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('deletion', "Succesfuly deleted $post->title post!");
    }    
}
