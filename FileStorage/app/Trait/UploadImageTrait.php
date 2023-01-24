<?php

namespace App\Trait;

use Illuminate\Http\Request;

trait UploadImageTrait
{

    public  function  UploadImage(Request $request, $folderName){
        $image = $request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs( $folderName,$image ,'samir');
        return $path;
    }

}
