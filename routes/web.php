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

Route::get('/stationary', 'StationaryController@search');
Route::get('/stationary/search', "StationaryController@search");
Route::get('/stationary/detail/{product}', 'StationaryController@product')->name('detailproduct')->middleware('auth');
Route::get('/stationary/pen', 'StationaryController@pen')->name('searchpen');
Route::get('/stationary/notebook', 'StationaryController@notebook')->name('searchnotebook');
Route::get('/stationary/ruler', 'StationaryController@ruler')->name('searchruler');
Route::get('/stationary/dictionary', 'StationaryController@dictionary')->name('searchdict');
//Route::get('/product/{product}', 'ProductController@viewstationary')->name('viewstaionary');

Route::resource('posts', 'PostsController');
Route::get('/stationeries', 'StationeriesController@index');
Route::post('/stationeries', 'StationeriesController@store');
Route::get('/stationeries/create', 'StationeriesController@create');
Route::post('/stationeries/update', 'StationeriesController@update');


Route::group(['middleware' => ['admin']], function (){
//    Route::get('/home', 'AdminController@handleAdmin')->name('admin.route');
    Route::get('edit/{id}', 'AdminController@edit')->name('edit');
    Route::put('update/{id}', 'AdminController@update')->name('update');
    Route::post('add/stat', 'AdminController@add')->name('add');
    Route::get('add/stat', 'AdminController@tambah')->name('tambah');
    Route::get('update-stationary-type', 'AdminController@updatetype')->name('updatetype');
    Route::get('add-stationary-type', 'AdminController@addtype')->name('updatetype');
});


Route::get('shoppingcart', 'MemberController@shopcart')->name('member.cart');
Route::get('transactionhistory', 'MemberCOntroller@transaction')->name('transaction');




