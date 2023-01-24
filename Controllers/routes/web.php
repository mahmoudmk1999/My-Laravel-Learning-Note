<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

/////////////////////normal//////////////////////////////////////////
Route::controller(PostController::class)->group(function (){
   Route::get('posts','showUsers');
   Route::get('posts/create','createPost');
   Route::get('posts/update/{id}','updatePost');
   Route::get('posts/edit/{id}','editPost');
   Route::get('posts/delete/{id}','deletePost');
});


Route::get('posts',[PostController::class,'showUsers']);
Route::get('posts/create',[PostController::class,'createPost']);
Route::get('posts/update/{id}',[PostController::class,'updatePost']);
Route::get('posts/edit/{id}',[PostController::class,'editPost']);
Route::get('posts/delete/{id}',[PostController::class,'deletePost']);


/////////////////////resource//////////////////////////////////////////
Route::resource('/users',UserController::class)->except([
    'create', 'update', 'edit'
]);

Route::resource('/users',UserController::class)->only([
    'index' , 'create'
]);

/////////////////////invoke//////////////////////////////////////////

Route::get('user_profile',UserProfileController::class);
