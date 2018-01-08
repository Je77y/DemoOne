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

	// Begin Album
    Route::get('/album', 'AlbumController@Index');
    Route::get('/album/create', 'AlbumController@Create');
    Route::post('/album/store', 'AlbumController@Store');
    Route::get('/album/show/{id}', 'AlbumController@Show');
    Route::get('/album/reload', 'AlbumController@Reload');
    Route::get('/album/edit/{id}', 'AlbumController@Edit');
    Route::post('/album/update', 'AlbumController@Update');
    Route::get('/album/destroy/{id}', 'AlbumController@Destroy');

	// End Album

	// Begin Banner
    Route::get('/banner', 'BannerController@Index');
    Route::get('/banner/create', 'BannerController@Create');
    Route::post('/banner/store', 'BannerController@Store');
    Route::get('/banner/show/{id}', 'BannerController@Show');
    Route::get('/banner/reload', 'BannerController@Reload');
    Route::get('/banner/edit/{id}', 'BannerController@Edit');
    Route::post('/banner/update', 'BannerController@Update');
    Route::get('/banner/destroy/{id}', 'BannerController@Destroy');
    // End Banner

    // Begin BlockContent
    Route::get('/blockcontent/{idduan}', 'BlockContentController@Index');
    Route::get('/blockcontent/show/{id}', 'BlockContentController@Show');
    Route::get('/blockcontent/reload/{id}', 'BlockContentController@Reload');
    Route::get('/blockcontent/edit/{id}', 'BlockContentController@Edit');
    Route::post('/blockcontent/update', 'BlockContentController@Update');
    // End BlockContent

    // Begin HinhAnh
    Route::get('/hinhanh', 'HinhAnhController@Index');
    Route::get('/hinhanh/create', 'HinhAnhController@Create');
    Route::post('/hinhanh/store', 'HinhAnhController@Store');
    Route::get('/hinhanh/show/{id}', 'HinhAnhController@Show');
    Route::get('/hinhanh/reload', 'HinhAnhController@Reload');
    Route::get('/hinhanh/edit/{id}', 'HinhAnhController@Edit');
    Route::post('/hinhanh/update', 'HinhAnhController@Update');
    Route::get('/hinhanh/destroy/{id}', 'HinhAnhController@Destroy');
    // End HinhAnh

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

    // Begin TaiLieu
	Route::get('/tailieu', 'TaiLieuController@index');
	// End TaiLieu
});
