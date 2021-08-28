<?php

Auth::routes();

// ========================================= Landing Page Kurban Mulai ============================================ //
Route::group(['prefix' => 'v1'], function () {
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
// ========================================= Landing Page Halal Akhir ============================================ //

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
        Route::get('/halal', 'BinaanController@dashboardMember');
        Route::resource('halal/binaan', 'BinaanController')->except(['daftar.binaan']);
    });
});


//================================== V2 Kurban =====================================//
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
Route::get('/login/binaan', 'Auth\LoginBinaanController@viewLogin');
Route::post('/login/binaan', 'Auth\LoginBinaanController@login');
Route::get('/login/check', 'Auth\LoginBinaanController@checkLogin');
/**
 * Working in progress?
 */
//Route::group(['prefix' => 'tes', 'namespace' => 'V2'], function () {
//    Route::get('/', 'TestController@indexTailwind');
//
//    Route::group(['namespace' => 'Auth'], function () {
//        Route::get('/login', 'LoginController@index');
//        Route::get('/register', 'RegisterController@index');
//    });
//
//    Route::group(['namespace' => 'Landing'], function () {
//        Route::get('/kurban', 'LandingPageController@index');
//    });
//});
//
//Route::group(['prefix' => 'dashboard', 'namespace' => 'V2\Dashboard'], function () {
//    Route::get('/', 'MainController@index');
//    Route::group(['prefix' => 'kurban', 'namespace' => 'ManagementKurban'], function () {
//        Route::get('/tambah', 'PenyuplaiKurbanController@index');
//    });
//});
