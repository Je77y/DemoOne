<?php

Route::group(['namespace' => 'Client'], function() {
    Route::get('/home', 'HomeController@index');
//Begin BAIVIET CLIENT
    Route::get('/post/{id}', 'BaiVietController@index');

    #End BAIVIET
    //Begin GioiThieu du an CLIENT
    Route::get('/duan/{id}', 'DuAnController@index');

    #End GioiThieu du an
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {

    Route::get('dangnhap', 'UserController@Login');
    Route::post('truycap', 'UserController@Sigin');
    Route::get('dangxuat', 'UserController@Logout');

    Route::group(['middleware' => 'adminLogin'], function() {
        Route::get('/', 'AdminController@Index');

        Route::group(['prefix' => 'baiviet'], function() {
            // Begin BaiViet
            Route::get('create/{id}', 'PostController@Create');
            Route::get('{idchude}', 'PostController@Index');
            Route::get('show/{id}', 'PostController@Show');
            Route::get('reload/{id}', 'PostController@Reload');
            Route::post('store', 'PostController@Store');
            Route::get('edit/{id}', 'PostController@Edit');
            Route::post('update', 'PostController@Update');
            Route::get('delete/{id}', 'PostController@Delete');
            Route::get('destroy/{id}', 'PostController@Destroy');
            // End BaiViet
        });

        Route::group(['prefix' => 'album'], function() {
            // Begin Album
            Route::get('/', 'AlbumController@Index');
            Route::get('create', 'AlbumController@Create');
            Route::post('store', 'AlbumController@Store');
            Route::get('show/{id}', 'AlbumController@Show');
            Route::get('reload', 'AlbumController@Reload');
            Route::get('edit/{id}', 'AlbumController@Edit');
            Route::post('update', 'AlbumController@Update');
            Route::get('destroy/{id}', 'AlbumController@Destroy');
            // End Album
        });

        Route::group(['prefix' => 'banner'], function() {
            // Begin Banner
            Route::get('/', 'BannerController@Index');
            Route::get('create', 'BannerController@Create');
            Route::post('store', 'BannerController@Store');
            Route::get('show/{id}', 'BannerController@Show');
            Route::get('reload', 'BannerController@Reload');
            Route::get('edit/{id}', 'BannerController@Edit');
            Route::post('update', 'BannerController@Update');
            Route::get('destroy/{id}', 'BannerController@Destroy');
            // End Banner
        });

        Route::group(['prefix' => 'blockcontent'], function(){
            // Begin BlockContent
            Route::get('/{idduan}', 'BlockContentController@Index');
            Route::get('show/{id}', 'BlockContentController@Show');
            Route::get('reload/{id}', 'BlockContentController@Reload');
            Route::get('edit/{id}', 'BlockContentController@Edit');
            Route::post('update', 'BlockContentController@Update');
            // End BlockContent
        });

        Route::group(['prefix' => 'hinhanh'], function(){
            // Begin HinhAnh
            Route::get('/', 'HinhAnhController@Index');
            Route::get('create', 'HinhAnhController@Create');
            Route::post('store', 'HinhAnhController@Store');
            Route::get('show/{id}', 'HinhAnhController@Show');
            Route::get('reload', 'HinhAnhController@Reload');
            Route::get('edit/{id}', 'HinhAnhController@Edit');
            Route::post('update', 'HinhAnhController@Update');
            Route::get('destroy/{id}', 'HinhAnhController@Destroy');
            // End HinhAnh
        });

        Route::group(['prefix' => 'chude'], function() {
            //Begin CHUDE
            Route::get('/', 'ChuDeController@index');
            Route::post('search', 'ChuDeController@search');
            Route::get('reload', 'ChuDeController@reload');
            Route::post('store', 'ChuDeController@store');
            Route::get('edit/{id}', 'ChuDeController@edit');
            Route::post('update', 'ChuDeController@update');
            Route::get('show/{id}', 'ChuDeController@show');
            Route::get('destroy/{id}', 'ChuDeController@destroy');
            //End CHUDE
        });

        Route::group(['prefix' => 'nguoidung'], function() {
            //Begin USER
            Route::get('/', 'UserController@Index');
            Route::get('create', 'UserController@Create');
            Route::post('create', 'UserController@SaveCreate');
            Route::post('checkexist', 'UserController@CheckExist');
            Route::post('reload', 'UserController@Reload');
            Route::get('edit/{id}', 'UserController@Edit');
            Route::post('edit', 'UserController@SaveEdit');
            Route::get('delete/{id}', 'UserController@Delete');
            Route::post('delete', 'UserController@Remove');
            //End USER
        });

        Route::group(['prefix' => 'slide'], function(){
            // Begin Slide
            Route::get('/', 'SlideController@Index');
            Route::get('create', 'SlideController@Create');
            Route::post('store', 'SlideController@Store');
            Route::get('show/{id}', 'SlideController@Show');
            Route::get('reload', 'SlideController@Reload');
            Route::get('edit/{id}', 'SlideController@Edit');
            Route::post('update', 'SlideController@Update');
            Route::get('destroy/{id}', 'SlideController@Destroy');
            // End Slide
        });

        Route::group(['prefix' => 'tailieu'], function() {
            // Begin TaiLieu
            Route::post('store', 'TaiLieuController@Store');
            Route::get('{idduan}', 'TaiLieuController@Index');
            Route::get('create/{idduan}', 'TaiLieuController@Create');
            Route::get('show/{id}', 'TaiLieuController@Show');
            Route::get('reload/{id}', 'TaiLieuController@Reload');
            Route::get('edit/{id}', 'TaiLieuController@Edit');
            Route::post('update', 'TaiLieuController@Update');
            Route::get('destroy/{id}', 'TaiLieuController@Destroy');
            // End TaiLieu
        });
    });
});



