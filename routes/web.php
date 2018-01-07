<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@index');
	Route::get('/dangnhap', 'UserController@login');

    Route::get('/baiviet/create/{id}', 'PostController@Create');
	Route::get('/baiviet/{idchude}', 'PostController@Index');
	Route::get('/baiviet/show/{id}', 'PostController@Show');
	Route::get('/baiviet/reload/{id}', 'PostController@Reload');
	Route::post('/baiviet/store', 'PostController@Store');
	Route::get('/baiviet/edit/{id}', 'PostController@Edit');
	Route::post('/baiviet/update', 'PostController@Update');
	Route::get('/baiviet/delete/{id}', 'PostController@Delete');
	Route::get('/baiviet/destroy/{id}', 'PostController@Destroy');

	Route::get('/danhmuc', 'DanhMucController@index');

	Route::get('/album', 'AlbumController@index');

	Route::get('/banner', 'BannerController@index');

	Route::get('/blockcontent', 'BlockContentController@index');

	Route::get('/hinhanh', 'HinhAnhController@index');

	//Begin CHUDE
	Route::get('/chude', 'ChuDeController@index');
	Route::post('/chude/search', 'ChuDeController@search');
	Route::get('/chude/reload', 'ChuDeController@reload');
	Route::get('/chude/list', 'ChuDeController@chudes');
	Route::post('/chude/store', 'ChuDeController@store');
	Route::get('/chude/edit/{id}', 'ChuDeController@edit');
	Route::post('/chude/update', 'ChuDeController@update');
	Route::get('/chude/show/{id}', 'ChuDeController@show');
	Route::get('/chude/destroy/{id}', 'ChuDeController@destroy');

	//End CHUDE

    //Begin USER
    Route::get('/nguoidung', 'UserController@Index');
    Route::get('/nguoidung/create', 'UserController@Create');
    Route::post('/nguoidung/create', 'UserController@SaveCreate');
    Route::post('/nguoidung/checkexist', 'UserController@CheckExist');
    Route::post('/nguoidung/reload', 'UserController@Reload');
    Route::get('/nguoidung/edit/{id}', 'UserController@Edit');
    Route::post('/nguoidung/edit', 'UserController@SaveEdit');
    Route::get('/nguoidung/delete/{id}', 'UserController@Delete');
    Route::post('/nguoidung/delete', 'UserController@Remove');
    //End USER



	Route::get('/slide', 'SlideController@index');
    Route::get('/lienhe', 'LienHeController@index');

	Route::get('/tailieu', 'TaiLieuController@index');
});
Route::group(['namespace' => 'Client'], function() {
    Route::get('/home', 'HomeController@index');
//Begin BAIVIET CLIENT
    Route::get('/post/{id}', 'BaiVietController@index');

    #End BAIVIET
});