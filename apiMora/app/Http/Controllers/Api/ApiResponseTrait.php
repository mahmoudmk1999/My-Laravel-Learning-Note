<?php

namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{

    public function apiResponse($data = null , $message = null, $staus = null){

        $array = [
            'data' => $data,
            'message' => $message,
            'status' => $staus
        ];
        return response($array,$staus);
    }
}
