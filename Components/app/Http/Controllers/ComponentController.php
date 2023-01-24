<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public  function  index(){
        $sport = 'Tennis';
        return view('index',compact('sport'));
    }
}
