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

	Route::get('/chude', 'ChuDeController@index');
	Route::get('/chude/them', 'ChuDeController@create');
	Route::post('/chude/tao', 'ChuDeController@store');
	Route::get('/chude/sua/{id}', 'ChuDeController@edit');
	Route::post('/chude/capnhat/{id}', 'ChuDeController@update');
	Route::get('/chude/xoa/{id}', 'ChuDeController@destroy');

	Route::get('/lienhe', 'LienHeController@index');

	Route::get('/slide', 'SlideController@index');

	Route::get('/tailieu', 'TaiLieuController@index');
});
