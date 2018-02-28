<?php

// Seccion Favoritos
Route::prefix('favoritos')->group(function () {
    Route::get('/', [
        'as' => 'favoritos.list',
        'uses' => 'FavoritosController@list'
    ]);

    Route::post('/addfav', [
        'as' => 'favoritos.addfav',
        'uses' => 'FavoritosController@addfav'
    ]);

    Route::post('/delfav', [
        'as' => 'favoritos.delfav',
        'uses' => 'FavoritosController@delfav'
    ]);
});

// Seccion Carrito
Route::prefix('cart')->group(function () {
    Route::get('/', [
        'as' => 'cart.list',
        'uses' => 'CartController@list'
    ]);
});