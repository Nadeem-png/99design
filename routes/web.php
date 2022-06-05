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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/testimonials', function () {
    return view('testimonials');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/media', function () {
    return view('media');
});
Route::get('/press', function () {
    return view('press');
});
Route::get('/nonprofit', function () {
    return view('nonprofit');
});

