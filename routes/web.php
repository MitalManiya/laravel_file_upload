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

// Laravel 5.8  Named Routes
Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');

Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

// demo for upload file in images folder and database also
//Route::get('/file-upload', function () {
//    return view('imageform');
//});

Route::get('file-upload', 'ImageFormController@store')->name('file.upload');