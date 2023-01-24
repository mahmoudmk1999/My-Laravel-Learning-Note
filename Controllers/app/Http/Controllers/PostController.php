<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showUsers(){
        return 'users';
    }

    public function createPost(){
        return view('posts_create');
    }
}
