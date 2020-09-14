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

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/blog', function () {
    return view('frontend.blog');

});

Route::get('/contact', function () {
    return view('frontend.contact');

});

Route::get('/mobile', function () {
    return view('frontend.mobile');
});
Route::get('/webdev', function () {
    return view('frontend.webdev');
});

Route::get('/webdesign', function () {
    return view('frontend.webdesign');
});

Route::get('/marketing', function () {
    return view('frontend.marketing');
});

Route::get('/optimazation', function () {
    return view('frontend.optimazation');
});

Route::get('/emailing', function () {
    return view('frontend.emailing');
});

Route::get('/login', function () {
    return view('frontend.login');

});
Route::get('/news1', function () {
    return view('frontend.news1');

});
Route::get('/news2', function () {
    return view('frontend.news1');

});
Route::get('/news3', function () {
    return view('frontend.news1');

});
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::resource('dashboard/categories', 'CategoriesController');
Route::resource('dashboard/blogs', 'BlogsController');
Route::resource('dashboard/sliders', 'SlidersController');
Route::resource('dashboard/contacts', 'ContactsController');
Route::resource('dashboard/galleries', 'GalleriesController');
Route::resource('dashboard/testimonies', 'TestimoniesController');
// Route::get('ckeditor-demo',function(){
//     return view('ckeditor.index');
// });

