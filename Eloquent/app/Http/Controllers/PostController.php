<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //query with scope
        $post = Post::Mk()->first();
        return  $post;


        //query without scope
//        $post = Post::where('body', '=', 'asda2131')->first();
//
//        return $post;

        //لعرض الصفحة
        //$posts = Post::all();
        //$posts = Post::get();

        //return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Post::create([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return response('Data has been sent');

//        $post = new Post();
//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::onlyTrashed()->get();
        return view('posts.softdelete',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::where('id',$id)->first();
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update(
            $request->all()
        );

        return redirect()->route('posts.index');


//        $post->title = $request->title;
//        $post->body = $request->body;
//        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Post::findOrFail($id)->delete();
        Post::destroy($id);
        return  redirect()->route('posts.index');
    }

    public function restore($id){
        Post::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }

    public function forceDelete($id){
        Post::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
}
