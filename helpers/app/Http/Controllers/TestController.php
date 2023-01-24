<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
//        return User::all()->dd();

//        return abort('403');

        $user = User::where('id',userId())->get();
        return  $user;

    }
}
