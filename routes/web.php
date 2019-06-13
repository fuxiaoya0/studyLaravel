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


Route::any('/index', 'IndexController@index');
Route::get('/admin/index', 'Admin\IndexController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/triangularhelixarray/{loop_times?}', 'HomeController@triangularHelixArray')->where('loop_times', '\d+');
Route::get('/home/triangularhelixarray1/{loop_times?}', 'HomeController@triangularHelixArray1')->where('loop_times', '\d+');
Route::get('/home/triangularhelixarray2/{loop_times?}', 'HomeController@triangularHelixArray2')->where('loop_times', '\d+');
Route::get('/home/triangularhelixarray3/{loop_times?}', 'HomeController@triangularHelixArray3')->where('loop_times', '\d+');

//web
Route::namespace('Web')->group(function () {
    Route::get('/', 'IndexController@index');
    Route::match(['get', 'post'], '/advise', 'IndexController@advise');
});

//swoole
Route::namespace('Swoole')->group(function () {
    Route::any('/server', 'ServerController@index');
});