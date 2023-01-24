<?php

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

//هدول الراوتات متعاملين مع الكونترولر العادي
//home.index = home/index
//Route::get('/', [StaticController::class, 'index'])->name('home.index');
//Route::get('/about', [StaticController::class, 'about'])->name('home.about');
//Route::get('/contact', [StaticController::class, 'contact'])->name('home.contact');
//
////route resource
//Route::resource('computers', ComputersController::class);
















////////////////////////////////////////////////////
//Route::get('/', function () {
//    return view('welcome');
//});
//
////عرفنا راوت عادي
//Route::get('/about',function (){
//   return view('about');
//});

//عرفنا راوت فيه request
//Route::get('/request',function (){
//    //مشان نحسن نستعملو بنكتب
//    //..../request?market = men
//    $select = request('market');
//
//   if (isset($select)){
//       //هون مشان زيادة الامان وما يصير في اكواد جافا حطينا الدالة
//       //strip_tags
//       return 'Hello Man in Market : ' . strip_tags($select);
//   }
//   else{
//       return  "Hello Man in Market None";
//   }
//});

//عرفنا راوت في الريكويست عم ياخدوا من الفنكشن والمسار فيه متغيرات
//اذا بدنا نخلي المتغير مو اجباري بنحط اشارة الاستفهام
//Route::get('/store/{category}/{item?}', function ($category, $item = 'nothing'){
//    return "<h1> {$category} and {$item} </h1>";
//});
