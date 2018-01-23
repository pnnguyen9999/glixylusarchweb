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

Route::get('/', 'adminsv@homeLoad');
Route::get('/product', function () {
    return view('product');
});
Route::get('/art/{art}', 'adminsv@artLoad');
Route::get('/admin', 'adminsv@getData');
/*Route::get('/admin', function () {
    return view('login');
});*/
Route::post('/login', 'adminsv@login');
Route::post('/upload', 'adminsv@upload');
Route::post('/modify', 'adminsv@rmData');
Route::get('/ajax',function(){
   return view('testajax');
});
Route::get('/getRequest', 'store@test');
