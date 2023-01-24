<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Trait\UploadImageTrait;
use Illuminate\Http\Request;

class UploadImage extends Controller
{
    use UploadImageTrait;
    public function showForm(){
        return view('upload');
    }


    public function store(Request $request){

        $path =  $this->UploadImage($request,'users');
        Image::create([
            'path' => $path
        ]);

        return 'Upload Ok';


//        $image = $request->file('photo')->getClientOriginalName();
//
//        //$path = $request->file('photo')->store('users','samir');
//
//        $path = $request->file('photo')->storeAs( 'users',$image ,'samir');
//        return $path;


    }


    public function index(){
        $images = Image::all();
        return view('index',compact('images'));
    }
}
