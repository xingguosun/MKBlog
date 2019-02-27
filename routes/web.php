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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', 'HomeController@index')->name('home');

// Route::get('articles', 'ArticleController@index');
// Route::get('article/{id}', function () {
//     return view('index');
// });
// Route::post('comment', 'CommentController@store');
// Route::get('/now',function(){
// 	return date('Y-m-d H:m:s');
// });

Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {
    Route::get('/', 'HomeController@index');
    Route::resource('articles', 'ArticleController');
});
Route::any('{all}', function () {
    return view('index');
})->where(['all' => '.*']);