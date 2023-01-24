<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Traits\TestTrait;
use Illuminate\Http\Request;

class TestController extends Controller
{
    use TestTrait;

    public function index(){
//        $users = User::all();
//        return $users;

//        $posts = Post::all();
//        return $posts;

        $users = $this->getData(User::class);
        return $users;

        $posts = $this->getData(new Post());
        return  $posts;

    }
}
