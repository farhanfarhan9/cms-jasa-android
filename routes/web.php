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
    return view('frontend.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('dashboard/categories', 'CategoriesController');
Route::resource('dashboard/blogs', 'BlogsController');
Route::resource('dashboard/sliders', 'SlidersController');

