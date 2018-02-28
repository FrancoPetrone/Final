<?php

// Seccion Productos
Route::prefix('productos')->group(function () {
    Route::get('/', [
        'as' => 'productos.all',
        'uses' => 'ProductosController@all'
    ]);

    Route::get('/{categoria}', [
        'as' => 'productos.categoria',
        'uses' => 'ProductosController@categoria'
    ]);

    Route::get('/addcart/{id}', [
        'as' => 'productos.addcart',
        'uses' => 'ProductosController@addcart'
    ]);

    Route::get('/delcart/{id}', [
        'as' => 'productos.delcart',
        'uses' => 'ProductosController@delcart'
    ]);
});
