<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        //طريقة كتابة
        //$user = User::find(1)->phone;
        //return $user;

        //طريقة كتابة
        //$user = User::find(1);
        //return $user->phone;

//        $phone = Phone::find(2)->user;
//        return $phone;


//    $user = User::find(1)->roles;
//    return $user;

        $role = Role::find(1)->users;
        return $role;
    }
}
