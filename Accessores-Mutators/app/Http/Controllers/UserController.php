<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($id){
        $user = User::find($id);
        return $user->name;
    }

    public function store(){
        User::create([
           'name' => 'ali',
           'email' => 'ali@yahoo.com',
            'password' => Hash::make('123456'),
        ]);
        return response('ok');
    }
}
