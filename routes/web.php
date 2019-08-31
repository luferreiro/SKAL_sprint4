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
//ruta del home page
Route::get('/', 'MuebleController@index');
// ruta a preguntas frecuentes
Route::get('/faq', function () {
    return view('preguntasfrecuentes');
});
// rutas del Auth
Auth::routes();

//Rutas de ABM Usuarios
Route::get('/abmusuarios', 'UserController@index')->middleware('administrador');

Route::get('/ver_usuario/{id}', 'UserController@show')->middleware('administrador');

Route::get('/editar_usuario/{id}/update', 'UserController@edit')->middleware('administrador');

Route::patch('/editar_usuario/{id}/update', 'UserController@update')->middleware('administrador');

Route::get('/eliminar_usuario/{id}','UserController@confirmar')->middleware('administrador');

Route::post('/confirmar','UserController@destroy')->middleware('administrador');

//Rutas de ABM Muebles
Route::get('/agregar_mueble','MuebleController@agregar')->middleware('administrador');

Route::post('/guardar_mueble', 'MuebleController@save')->middleware('administrador');

Route::get('/abmmuebles', 'MuebleController@abm')->middleware('administrador');

Route::get('/ver_mueble/{id}', 'MuebleController@show')->middleware('administrador');

Route::get('/editar_mueble/{id}', 'MuebleController@editar')->middleware('administrador');

Route::patch('/editar_mueble/{id}', 'MuebleController@update')->middleware('administrador');

Route::get('/eliminar_mueble/{id}', 'MuebleController@confirmar')->middleware('administrador');

Route::post('/confirmar_mueble', 'MuebleController@destroy')->middleware('administrador');

// Aquí es donde controlo lo del carrito de compras, agregar productos
Route::get('cart/add/{id}', "CartController@add")->name('cart.add')->middleware('auth');
//Carrito de compras elimino productos
Route::get('cart/remove/{id}', "CartController@remove")->name('cart.remove')->middleware('auth');
//Muestro los productos del carrito
Route::get('/cart', 'CartController@show')->name('cart')->middleware('auth');

Route::get('/confirmar_compra', 'CartController@confirmar')->name('cart')->middleware('auth');

Route::post('/confirmar_compra', 'CartController@finalizar')->name('cart')->middleware('auth');

Route::get('/sistema_venta', 'VentaController@ventas');

Auth::routes();
