<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::any('/', function() {
    return View::make('inicio');
});

Route::group(array('prefix' => 'api'), function() {
    Route::resource('farmacia','FarmaciaController');
    Route::resource('sucursales','SucursalesController');
    Route::resource('perfil','UserController');
    Route::resource('proveedores','ProveedorController');
    Route::resource('compras','ComprasController');
    Route::resource('pFarmacia','pFarmaciaController');
    Route::resource('pSucursal','pSucursalController');

    Route::resource('clientes','clienteController');

    //ruta para los productos
    Route::get("productos", 'ProductoController@all');
});

Route::any('{path?}', function($path) {
    return Redirect::to('/');
});
