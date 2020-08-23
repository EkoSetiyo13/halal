<?php

Auth::routes();

// ========================================= Landing Page Kurban Mulai ============================================ //

Route::group(['prefix' => 'kurban'], function() {
    Route::get('/', 'Ecommerce\FrontController@index')->name('front.index');
    Route::get('/product', 'Ecommerce\FrontController@product')->name('front.product');
    Route::get('/penerima', 'Ecommerce\FrontController@penerima')->name('front.penerima');
    Route::get('/penyuplai', 'Ecommerce\FrontController@penyuplai')->name('front.penyuplai');
    Route::get('/cara-pendaftaran', 'Ecommerce\FrontController@kontak')->name('front.cara-pendaftaran');
    Route::get('/category/{slug}', 'Ecommerce\FrontController@categoryProduct')->name('front.category');
    Route::get('/product/{slug}', 'Ecommerce\FrontController@show')->name('front.show_product');
    Route::get('/penerima/{slug}', 'Ecommerce\FrontController@showPenerima')->name('front.show_penerima');
    Route::get('/penyuplai/{slug}', 'Ecommerce\FrontController@showPenyuplai')->name('front.show_penyuplai');
});



// ========================================= Landing Page Kurban Akhir ============================================ //



// ========================================= Landing Page Halal Mulai ============================================ //

Route::get('/', 'Halal\HalalController@home')->name('halal');
Route::get('/kader', 'Halal\HalalController@kader')->name('kader');
Route::get('/kader-cari', 'Halal\HalalController@cariKader')->name('cari.kader');
Route::get('/kader/{no_binaan}', 'Halal\HalalController@detailBinaan')->name('detail.binaan');

Route::get('/binaan', 'Halal\HalalController@binaan')->name('binaan');
Route::get('/binaan-cari', 'Halal\HalalController@cariBinaan')->name('cari.binaan');
Route::get('/binaan/{no_binaan}', 'Halal\HalalController@detailBinaan')->name('detail.binaan');

// ========================================= Landing Page Halal Akhir ============================================ //



// ========================================= Dashboard Mulai ============================================ //

Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function() {
    Route::get('/home', 'HomeController@adminHome')->name('admin.home'); 
    Route::get('/halal', 'HomeController@adminHalal')->name('admin.halal'); 
    Route::resource('category', 'CategoryController')->except(['create', 'show']);
    Route::resource('user', 'UserController')->except(['create', 'show']);
    Route::get('/user/{id}', 'UserController@profile')->name('user.profile');
    Route::resource('product', 'ProductController')->except(['show']);
    Route::resource('post', 'PostController')->except(['show']);

    Route::resource('umkm', 'UmkmController')->except(['daftar.umkm']);
    Route::get('kader-halal', 'UmkmController@kader')->name('umkm.kader');
    Route::get('umkm-halal', 'UmkmController@umkm')->name('umkm.umkm');
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

Route::get('/hapus-binaan', 'Halal\HalalController@hapusSemua');

// ========================================= Dashboard Akhir ============================================ //

Route::get('/users', 'UmkmController@index')->name('users.index');
Route::post('/users/import', 'UmkmController@import')->name('users.import');
Route::get('/users/export', 'UmkmController@export')->name('users.export');

Route::get('/qrcode', 'Halal\HalalController@qrCode');
Route::get('/contoh', function () {
    return view('halal/home/home');
});

Route::fallback(function() {
    return view('error');
});