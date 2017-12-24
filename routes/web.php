<?php

use Illuminate\Support\Facades\App;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// change the locale
// using local Middleware
Route::get('/lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
 return redirect()->back();
});

Route::get('/admin/dashboard', function () {

    return view('backend/dashboard');
});

Route::get('/frontend/dashboard', function () {

    return view('frontend/dashboard');
});