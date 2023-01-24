<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.index',compact('posts'));
    }



    //
    public function create()
    {
        return view('posts.create');
    }



    //
    public function store(Request $request)
    {
        Post::create([
           'title' => $request->title,
           'body' => $request->body
        ]);

        return redirect()->route('posts.index');

    }




    public function show(Post $post)
    {
        //
    }



    //
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit',compact('post'));
    }



    //
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->update([
           'title' => $request->title,
           'body' => $request->body
        ]);

        return redirect()->route('posts.index');

    }


    public function destroy($id)
    {
        Post::findOrFail($id)->delete();

        return back();

    }
}
