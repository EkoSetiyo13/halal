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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/', 'Ecommerce\FrontController@index')->name('front.index');
Route::get('/product', 'Ecommerce\FrontController@product')->name('front.product');
Route::get('/penerima', 'Ecommerce\FrontController@penerima')->name('front.penerima');
Route::get('/penyuplai', 'Ecommerce\FrontController@penyuplai')->name('front.penyuplai');
Route::get('/category/{slug}', 'Ecommerce\FrontController@categoryProduct')->name('front.category');
Route::get('/product/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');
Route::get('/penerima/{slug}', 'Ecommerce\FrontController@showPenerima')->name('front.show_penerima');
Route::get('/penyuplai/{slug}', 'Ecommerce\FrontController@showPenyuplai')->name('front.show_penyuplai');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Route::group(['prefix' => 'admin'], function() {
    Route::get('/home', 'HomeController@adminHome')->name('admin.home'); 
    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('jenis-ternak', 'JenisTernakController')->except(['create', 'show']);
    Route::resource('user', 'UserController')->except(['create', 'show']);
    Route::get('/user/{id}', 'UserController@profile')->name('user.profile');
    Route::resource('product', 'ProductController')->except(['show']);
    
    
    

});


Route::group(['prefix' => 'member', 'middleware' => 'is_penyuplai'], function() {
    Route::resource('form-penyuplai', 'FormPenyuplaiQurbanController')->except(['show']);
});

Route::group(['prefix' => 'member', 'middleware' => 'is_penerima'], function() {
    Route::resource('form-penerima', 'FormPenerimaQurbanController')->except(['show']);

});



Route::group(['prefix' => 'member'], function() {
    Route::resource('product', 'ProductController')->except(['show']);

});

Route::get('/example', 'ExampleController@index')->name('example');