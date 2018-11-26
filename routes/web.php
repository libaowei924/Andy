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
//首页
Route::get('/','HomeController@index')->name('home');
//类别下的文章
Route::get('type/{type}','ArticletypeController@index')->name('type');
//文章内容
Route::get('article/{article}','ArticleController@show')->name('article');
