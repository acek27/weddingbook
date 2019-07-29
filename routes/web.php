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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'can:user'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::resource('/dashboardUser', 'User\homeUserController');
        Route::resource('/userData', 'User\dataController');
        Route::resource('/dataTamu', 'User\tamuController');
        Route::get('/tamu/data','User\tamuController@dataTamu')
            ->name('tamu.data');
    });
});
