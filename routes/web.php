<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@index');
	Route::get('/dangnhap', 'UserController@login');

	Route::get('/baiviet', 'PostController@index');
	Route::get('/baiviet/them', 'PostController@create');

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
	Route::get('/lienhe', 'LienHeController@index');

	Route::get('/slide', 'SlideController@index');

	Route::get('/tailieu', 'TaiLieuController@index');
});
