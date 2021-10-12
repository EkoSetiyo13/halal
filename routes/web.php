<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

// ========================================= Landing Page Module Halal ============================================ //
Route::get('/', 'Halal\HalalController@home')->name('halal');
Route::get('/kader', 'Halal\HalalController@kader')->name('kader');
Route::get('/kader/json', 'Halal\HalalController@kaderJson')->name('kader.json');
Route::get('/kader/{no_binaan}', 'Halal\HalalController@detailKader')->name('detail.kader');
Route::get('/kader/{no_binaan}/json', 'Halal\HalalController@detailKaderJson')->name('detail.kader.json');
Route::get('/binaan', 'Halal\HalalController@binaan')->name('binaan');
Route::get('/binaan/json', 'Halal\HalalController@binaanJson')->name('binaan.json');
Route::get('/binaan/{no_binaan}', 'Halal\HalalController@detailBinaan')->name('detail.binaan');
Route::get('/binaan/{no_binaan}/json', 'Halal\HalalController@detailBinaanJson')->name('detail.binaan.json');
Route::get('/data-dosen', 'Halal\HalalController@dataDosen')->name('data.dosen');
Route::get('/data-mahasiswa', 'Halal\HalalController@dataMahasiswa')->name('data.mahasiswa');
Route::get('/tanya-halal', 'Halal\HalalController@tanyaHalal')->name('tanya-halal');

// ========================================= Dashboard Mulai ============================================ //
Route::group(['middleware' => 'is_admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', function () {
            return redirect()->route('admin.halal');
        });
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
        Route::get('setting', 'Halal\SettingController@SettingView')->name('setting.index');
        Route::get('setting/regis', 'Halal\SettingController@switchStatusRegis')->name('setting.regis-binaan');
    });

    Route::group(['prefix' => 'member'], function () {
        Route::resource('product', 'ProductController')->except(['show']);
        Route::resource('form-penyuplai', 'FormPenyuplaiQurbanController')->except(['show']);
        Route::resource('form-penerima', 'FormPenerimaQurbanController')->except(['show']);
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'UmkmController@index')->name('users.index');
        Route::post('/import', 'UmkmController@import')->name('users.import');
        Route::get('/export', 'UmkmController@export')->name('users.export');
    });
});
// ========================================= Dashboard Akhir ============================================ //
Route::fallback(function () {
    return view('error');
});
Route::group(['middleware' => 'is_member'], function () {
    Route::group(['prefix' => 'member', 'namespace' => 'Halal'], function () {
        Route::resource('halal/binaan', 'BinaanController');
    });
});


//================================== Landing Page Module Kurban =====================================//
Route::group(['namespace' => 'V2'], function () {
    Route::group(['namespace' => 'Landing'], function () {
        Route::get('/kurban', 'LandingPageController@index');
        Route::get('/qurban', 'LandingPageController@index');
        Route::get('/kurban/penerima', 'LandingPageController@penerima')->name('kurban.penerima');
        Route::get('/kurban/penerima/item/{id}', 'LandingPageController@penerimaItem')->name('kurban.penerima.item');
        Route::get('/kurban/penyuplai', 'LandingPageController@penyuplai')->name('kurban.penyuplai');
        Route::get('/kurban/penyuplai/item/{id}', 'LandingPageController@penyuplaiItem')->name('kurban.penyuplai.item');
    });
});

Route::get('/register/binaan', 'Auth\RegisterBinaanController@viewBinaan');
Route::post('/register/binaan', 'Auth\RegisterBinaanController@createBinaan');

