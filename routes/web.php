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

// ユーザー登録
Route::get('signup', 'SignupController@index')->name('signup.index');

Route::post('signup', 'SignupController@postIndex');

Route::get('signup/confirm', 'SignupController@confirm')->name('signup.confirm');

Route::post('signup/confirm', 'SignupController@postConfirm');

Route::get('signup/thanks', 'SignupController@thanks')->name('signup.thanks');

// 管理画面
Route::prefix('admin')->namespace('Admin')->as('admin.')->group(function () {

    Route::middleware('guest:admin')->group(function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');

        Route::post('login', 'LoginController@login');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('logout', 'LoginController@logout')->name('logout');

        Route::get('', 'IndexController@index')->name('top');

        Route::get('message', 'MessageController@index')->name('message.index');

        Route::get('message/create', 'MessageController@create')->name('message.create');

        Route::post('message/create', 'MessageController@store');

        Route::get('message/edit/{message}', 'MessageController@edit')->name('message.edit');

        Route::post('message/edit/{message}', 'MessageController@update');

        Route::get('user', 'UserController@index')->name('user.index');

        Route::delete('user/destroy/{user}', 'UserController@destroy')->name(user.destroy);
    });
});
