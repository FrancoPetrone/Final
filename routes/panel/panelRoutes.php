<?php

Route::group(["middleware" => "admin"],function() {

    // Seccion ♦ Panel
    Route::prefix('panel')->group(function () {
        Route::get('/', [
            'as' => 'panel.menu',
            'uses' => 'PanelController@menu'
        ]);

        Route::prefix('productos')->group(function () {
            Route::get('/', [
                'as' => 'panel.productos.lista',
                'uses' => 'PanelProductosController@productos'
            ]);

            // Vistas

            Route::get('/nuevo', [
                'as' => 'panel.productos.nuevo',
                'uses' => 'PanelProductosController@nuevo'
            ]);

            Route::get('/editar/{id}', [
                'as' => 'panel.productos.editar',
                'uses' => 'PanelProductosController@editar'
            ]);

            // Acciones

            Route::post('/create', [
                'as' => 'panel.productos.create',
                'uses' => 'PanelProductosController@create'
            ]);

            Route::put('/edit/{id}', [
                'as' => 'panel.productos.edit',
                'uses' => 'PanelProductosController@edit'
            ]);

            Route::delete("/delete/{id}", [
                "as" => "panel.productos.delete",
                "uses" => "PanelProductosController@delete"
            ]);
        });

        Route::prefix('usuarios')->group(function () {
            Route::get('/', [
                'as' => 'panel.usuarios.lista',
                'uses' => 'PanelUsuariosController@usuarios'
            ]);

            // Vista

            Route::get('/editar/{id}', [
                'as' => 'panel.usuarios.editar',
                'uses' => 'PanelUsuariosController@editar'
            ]);

            // Acciones

            Route::put('/edit/{id}', [
                'as' => 'panel.usuarios.edit',
                'uses' => 'PanelUsuariosController@edit'
            ]);

            Route::delete("/delete/{id}", [
                "as" => "panel.usuarios.delete",
                "uses" => "PanelUsuariosController@delete"
            ]);
        });
    });
});