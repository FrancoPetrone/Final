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
})->name('home');

require_once( __DIR__ . '/site/guestRoutes.php');

Route::group(["middleware" => "auth"],function(){

    // Cerrar Sesion
    Route::get('/logout', [
        'as' => 'logout',
        'uses' => 'Auth\LoginController@logout'
    ]);

    require_once( __DIR__ . '/site/userRoutes.php');
    require_once( __DIR__ . '/panel/panelRoutes.php');
});

// Default Authentication
Auth::routes();