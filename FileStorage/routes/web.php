<?php

use App\Http\Controllers\UploadImage;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    //Storage::disk('local')->put('example.txt', 'Contents');

    //Storage::disk('samir')->put('example.txt', 'Contents');

    //return 'ok';
});


Route::get('show',[UploadImage::class,'showForm']);

Route::post('store',[UploadImage::class,'store'])->name('photo.save');

Route::get('show/image',[UploadImage::class,'index']);
