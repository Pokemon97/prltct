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
//trang admin
Route::get('index', [
	'as'=>'home-page',
	'uses'=>'PageController@getIndex'
]);
Route::get('productInfo/{id}', [
	'as'=>'productDetail',
	'uses'=>'PageController@getProduct'
]);
Route::get('search', [
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);


Route:: group(['prefix'=>'admin'], function() {
	
	Route::group(['prefix'=>'theloai'], function() {
		Route::get('danhsach', 'TheLoaiController@getDanhSach');

		Route::get('them', 'TheLoaiController@getThem');

		Route::post('them', 'TheLoaiController@postThem');

		Route::get('sua/{id}', 'TheLoaiController@getSua');

		Route::post('sua/{id}', 'TheLoaiController@postSua');

		Route::get('xoa/{id}', 'TheLoaiController@getXoa');

	});

	Route::group(['prefix'=>'sanpham'], function() {
		Route::get('danhsach', 'SanPhamController@getDanhSach');

		Route::get('them', 'SanPhamController@getThem');

		Route::post('them', 'SanPhamController@postThem');

		Route::get('sua/{id}', 'SanPhamController@getSua');

		Route::post('sua/{id}', 'SanPhamController@postSua');

		Route::get('xoa/{id}', 'SanPhamController@getXoa');

	});

	
});
