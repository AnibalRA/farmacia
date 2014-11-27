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
Route::get('/', function() { 
    return View::make('inicio');
});

Route::group(array('prefix' => 'api'), function() {
    Route::resource('farmacia','SucursalesController');
    Route::resource('sucursales','FarmaciaController');
    Route::resource('perfil','UserController');
    Route::resource('proveedores','ProveedoresController');
    Route::resource('compras','ComprasController');
    Route::resource('clientes','ClienteController');
});