<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'HomeController@handleAdmin')->name('admin.route')->middleware('admin');

Route::get('/product', 'ProductController@search');
Route::get('/product/search', "ProductController@search");
Route::get('/product/detail/{product}', 'ProductController@product')->name('detailproduct');
//Route::get('/product/{product}', 'ProductController@viewstationary')->name('viewstationary');

Route::group(['middleware'=>'Admin'], function (){
//    Route::get('/home', 'AdminController@handleAdmin')->name('admin.route');
});


