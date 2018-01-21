<?php

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

Route::get('/about',function (){
    return "this is about section";
});

Route::get('/contact',function (){
    return "this is contact section";
});

Route::get('/post/{id}',function ($id){
    return "this is post number ".$id;
});
