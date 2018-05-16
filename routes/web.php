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
// LOAD TRANG CHỦ
Route::get('/', 'adminsv@homeLoad');
//--------------------------------------
// LOAD TRANG ADMIN UPLOAD SLIDE VÀ MODIFY SLIDE
Route::get('/modhome', 'adminsv@getData');
Route::post('/upload', 'adminsv@upload');
Route::post('/modify', 'adminsv@rmData');
//--------------------------------------
// LOAD VÀO TRANG ADMIN
Route::get('/admin',function(){
   return view('adminDash/adminDashboard');
});
//--------------------------------------
// LOAD VÀO GALLERY KIẾN TRÚC
Route::get('/galleryKT',function(){
   return view('galleryKT');
});
//--------------------------------------
