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

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'App\Http\Controllers\admin'], function(){
    Route::get('/', 'MainController@index')->name('admin.main');
    Route::resource('/category', 'CategoryController');
    Route::resource('/posts', 'PostController');
});


Route::group(['middleware' => 'guest', 'namespace' => 'App\Http\Controllers\admin'], function(){
Route::get('/register', 'UserController@registerForm')->name('register.form');
Route::get('/login', 'UserController@loginForm')->name('login.form');
Route::post('/register', 'UserController@registerStore')->name('register.store');
Route::post('/login', 'UserController@login')->name('login');
});


Route::resource('/category', 'App\Http\Controllers\admin\CategoryController');



Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');


Route::get('/', 'App\Http\Controllers\Front\FrontController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\Front\FrontController@about')->name('about');
Route::get('/contacts', 'App\Http\Controllers\Front\FrontController@contacts')->name('contacts');

Route::get('/logout', 'App\Http\Controllers\admin\UserController@logout')->name('logout')->middleware('auth');
