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

Route::get('/home', 'HomeController@index')->name('home');;

Route::resource('pictures', 'PictureController', ['except' => ['create', 'edit', 'update']])->middleware('auth');

Route::resource('session', 'SessionController');

Route::get('/calendar', 'CalendarController@index');

/*
 * 后台
 */
Route::group(['prefix' => 'admin','namespace' => 'Admin\Auth','middleware' => 'web'], function () {

    Route::get('/login', 'LoginController@showLoginForm');

    Route::post('/login', 'LoginController@login');

    Route::get('/register', 'RegisterController@showRegistrationForm');

    Route::post('/register', 'RegisterController@register');
});


Route::group(['prefix' => 'admin','namespace' => 'Admin','middleware' => 'web'],function (){

    Route::get('/', 'IndexController@index');

    Route::get('menus' ,'MenusController@index');

    Route::resource('pictures' ,'PictureController');

});


Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
