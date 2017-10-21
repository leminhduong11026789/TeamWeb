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

Auth::routes();
Route::get('/home', 'HomeController@index');



Route::get('trang-chu', ['as'=> 'home.index', 'uses' => 'Frontend\HomeController@index']);





Route::get('admin/danhMucSanPhams', ['as'=> 'admin.danhMucSanPhams.index', 'uses' => 'DanhMucSanPhamController@index']);
Route::post('admin/danhMucSanPhams', ['as'=> 'admin.danhMucSanPhams.store', 'uses' => 'DanhMucSanPhamController@store']);
Route::get('admin/danhMucSanPhams/create', ['as'=> 'admin.danhMucSanPhams.create', 'uses' => 'DanhMucSanPhamController@create']);
Route::put('admin/danhMucSanPhams/{danhMucSanPhams}', ['as'=> 'admin.danhMucSanPhams.update', 'uses' => 'DanhMucSanPhamController@update']);
Route::patch('admin/danhMucSanPhams/{danhMucSanPhams}', ['as'=> 'admin.danhMucSanPhams.update', 'uses' => 'DanhMucSanPhamController@update']);
Route::delete('admin/danhMucSanPhams/{danhMucSanPhams}', ['as'=> 'admin.danhMucSanPhams.destroy', 'uses' => 'DanhMucSanPhamController@destroy']);
Route::get('admin/danhMucSanPhams/{danhMucSanPhams}', ['as'=> 'admin.danhMucSanPhams.show', 'uses' => 'DanhMucSanPhamController@show']);
Route::get('admin/danhMucSanPhams/{danhMucSanPhams}/edit', ['as'=> 'admin.danhMucSanPhams.edit', 'uses' => 'DanhMucSanPhamController@edit']);


Route::get('admin/sanPhams', ['as'=> 'admin.sanPhams.index', 'uses' => 'SanPhamController@index']);
Route::post('admin/sanPhams', ['as'=> 'admin.sanPhams.store', 'uses' => 'SanPhamController@store']);
Route::get('admin/sanPhams/create', ['as'=> 'admin.sanPhams.create', 'uses' => 'SanPhamController@create']);
Route::put('admin/sanPhams/{sanPhams}', ['as'=> 'admin.sanPhams.update', 'uses' => 'SanPhamController@update']);
Route::patch('admin/sanPhams/{sanPhams}', ['as'=> 'admin.sanPhams.update', 'uses' => 'SanPhamController@update']);
Route::delete('admin/sanPhams/{sanPhams}', ['as'=> 'admin.sanPhams.destroy', 'uses' => 'SanPhamController@destroy']);
Route::get('admin/sanPhams/{sanPhams}', ['as'=> 'admin.sanPhams.show', 'uses' => 'SanPhamController@show']);
Route::get('admin/sanPhams/{sanPhams}/edit', ['as'=> 'admin.sanPhams.edit', 'uses' => 'SanPhamController@edit']);


Route::get('admin/lienHeKhaches', ['as'=> 'admin.lienHeKhaches.index', 'uses' => 'LienHeKhachController@index']);
Route::post('admin/lienHeKhaches', ['as'=> 'admin.lienHeKhaches.store', 'uses' => 'LienHeKhachController@store']);
Route::get('admin/lienHeKhaches/create', ['as'=> 'admin.lienHeKhaches.create', 'uses' => 'LienHeKhachController@create']);
Route::put('admin/lienHeKhaches/{lienHeKhaches}', ['as'=> 'admin.lienHeKhaches.update', 'uses' => 'LienHeKhachController@update']);
Route::patch('admin/lienHeKhaches/{lienHeKhaches}', ['as'=> 'admin.lienHeKhaches.update', 'uses' => 'LienHeKhachController@update']);
Route::delete('admin/lienHeKhaches/{lienHeKhaches}', ['as'=> 'admin.lienHeKhaches.destroy', 'uses' => 'LienHeKhachController@destroy']);
Route::get('admin/lienHeKhaches/{lienHeKhaches}', ['as'=> 'admin.lienHeKhaches.show', 'uses' => 'LienHeKhachController@show']);
Route::get('admin/lienHeKhaches/{lienHeKhaches}/edit', ['as'=> 'admin.lienHeKhaches.edit', 'uses' => 'LienHeKhachController@edit']);
