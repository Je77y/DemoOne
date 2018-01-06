<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {
	Route::get('/', 'AdminController@index');
	Route::get('/dangnhap', 'UserController@login');

	Route::get('/baiviet', 'PostController@Index');
	Route::get('/baiviet/create', 'PostController@Create');
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

    //End USER
	Route::get('/lienhe', 'LienHeController@index');

	Route::get('/slide', 'SlideController@index');

	Route::get('/tailieu', 'TaiLieuController@index');
});
