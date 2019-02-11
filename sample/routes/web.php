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

//Route::get('/create','UserController@create');
//Route::post('/store','UserController@store');
//Route::get('/','UserController@index');
//Route::get('/edit/{id}','UserController@edit');
//Route::post('/update','UserController@update');
// Route::get('/delete/{id}','UserController@delete');
//Route::post('/delete','UserController@delete');


Auth::routes();

//トップページ
//Homeコントローラ
Route::get('/', 'HomeController@index');

//ツイートを保存する
//Tweetコントローラ
Route::post('/tweet','TweetController@update');


//ユーザー一覧
//Userコントローラ
Route::post('/users','UserController@index');
Route::get('/users', 'UserController@index')->name('user_list');

//フォローを実行する
//Userコントローラ
Route::get('/users/follow','UserController@follow');
Route::post('/users/follow','UserController@follow');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
