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
    return view('pages.home');
});

Route:: get("/about", function(){
        return view ("pages.about");

});

Route:: get("/project1", function(){
        return view ("pages.project1");

});

Route:: get("/project2", function(){
        return view ("pages.project2");

});
Route:: get("/project3", function(){
        return view ("pages.project3");

});
Route:: get("/contact", function(){
        return view ("pages.contact");

});
