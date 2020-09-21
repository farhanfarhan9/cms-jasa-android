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

Route::get('/', 'HeroesController@index');

Route::get('/about', function () {
    return view('frontend.about');
});

Route::resource('/blog','BloggersController');
// Route::get('/blog', function () {
//     return view('frontend.blog');

// });

Route::get('/contact', function () {
    return view('frontend.contact');

});

Route::post('/contact', 'ContactsController@store');

Route::get('/pesansekarang', function () {
    return view('frontend.pesansekarang');

});
Route::get('/hosting', function () {
    return view('frontend.hosting');

});
Route::get('/domain', function () {
    return view('frontend.domain');

});
Route::get('/promo', function () {
    return view('frontend.promo');

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

// Route::get('/news2', function () {
//     return view('frontend.news2');

// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard')->middleware('auth');

Route::resource('dashboard/categories', 'CategoriesController')->middleware('auth');
Route::resource('dashboard/blogs', 'BlogsController')->middleware('auth');

Route::resource('dashboard/sliders', 'SlidersController')->middleware('auth');

// Route::resource('dashboard/contacts', 'ContactsController')->middleware('auth');

Route::get('dashboard/contacts', 'ContactsController@index')->name('contacts.index')->middleware('auth');
Route::post('dashboard/contacts', 'ContactsController@store')->name('contacts.store');
Route::get('dashboard/contacts/create', 'ContactsController@create')->name('contacts.create')->middleware('auth');
Route::get('dashboard/contacts/{create}/edit', 'ContactsController@edit')->name('contacts.edit')->middleware('auth');
Route::patch('dashboard/contacts/{contact}', 'ContactsController@update')->name('contacts.update')->middleware('auth');
Route::delete('dashboard/contacts/{contact}', 'ContactsController@destroy')->name('contacts.destroy')->middleware('auth');

Route::resource('dashboard/galleries', 'GalleriesController')->middleware('auth');
Route::resource('dashboard/testimonies', 'TestimoniesController')->middleware('auth');
Route::resource('dashboard/products', 'ProductsController')->middleware('auth');
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });
// Route::get('ckeditor-demo',function(){
//     return view('ckeditor.index');
// });


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
