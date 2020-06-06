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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
});


/*【課題3】
「http://XXXXXX.jp/XXX というアクセスが来たときに、 AAAControllerの
bbbというAction に渡すRoutingの設定」を書いてみてください。*/
Route::get('XXX', 'AAAController@bbb');


/*【課題4】
admin/profile/create にアクセスしたら ProfileControllerのadd Actionに、
admin/profile/edit にアクセスしたら ProfileController の edit Action に
割り当てるように設定してください。*/
Route::get('admin/profile/create', 'Admin\ProfileController@add')->middleware('auth');
Route::get('admin/profile/edit', 'Admin\ProfileController@edit')->middleware('auth');
Route::post('admin/profile/create', 'Admin\ProfileController@create')->middleware('auth');
Route::post('admin/profile/edit', 'Admin\ProfileController@update')->middleware('auth');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
