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


Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('contacto', ['as' => 'contacto', 'uses' => 'PagesController@contacto']);

Route::get('registrarInv', ['as' => 'registrarInv', 'uses' => 'PagesController@registrarInv']);

Route::get('consultarInv', ['as' => 'consultarInv', 'uses' => 'PagesController@consultarInv']);
    
Route::get('medidas', ['as' => 'medidas', 'uses' => 'PagesController@medidas']);


Route::get('/Qu','QuController@index');
Route::get('Qu/create', ['as' => 'Qu.create', 'uses' => 'QuController@create']);
Route::post('Qu', ['as' => 'Qu.store', 'uses' => 'QuController@store']);
Route::get('/Qu/{calidad}/editar','QuController@editar');
Route::put('/Qu/{calidad}','QuController@actualizar');
Route::delete('/Qu/{calidad}','QuController@destroy');
Route::get('/Qu/{id}', 'QuController@show')->where('id', '[0-9]+')->name('show');



Route::get('/sucursal','SucursalController@index');
Route::get('sucursal/create', ['as' => 'sucursal.create', 'uses' => 'SucursalController@create']);
Route::post('sucursal', ['as' => 'sucursal.store', 'uses' => 'SucursalController@store']);
Route::get('/sucursal/{sucursal}/editar','SucursalController@editar');
Route::put('/sucursal/{sucursal}','SucursalController@actualizar');
Route::delete('/sucursal/{sucursal}','SucursalController@destroy');
Route::get('/sucursal/{id}', 'SucursalController@show')->where('id', '[0-9]+')->name('show');



Route::get('/usuarios' , 'UserController@index');
Route::get('/usuarios/create', 'UserController@create');
Route::post('/usuarios/store', 'UserController@store');
Route::get('/usuarios/{user}/editar','UserController@editar');
Route::put('/usuarios/{user}','UserController@actualizar');
Route::delete('/usuarios/{user}','UserController@destroy');
Route::get('/usuarios/{id}', 'UserController@show')->where('id', '[0-9]+');


Route::get('/tela' , 'TelaController@index');
Route::get('/tela/create', 'TelaController@create');
Route::post('/tela/store', 'TelaController@store');
Route::get('/tela/{tela}/editar','TelaController@editar');
Route::put('/tela/{tela}','TelaController@actualizar');
Route::delete('/tela/{tela}','TelaController@destroy');
Route::get('/tela/{id}', 'TelaController@show')->where('id', '[0-9]+');



Route::get('/reporte' , 'ReporteController@index');
Route::get('/reporte/inventario' , 'ReporteController@inventario');
Route::get('/reporte/calidad' , 'ReporteController@calidad');
Route::get('/reporte/graficaInv' , 'ReporteController@graficaInv');
Route::get('/reporte/costosInv' , 'ReporteController@costosInv');
Route::get('/reporte/graficaPorLocalidad' , 'ReporteController@graficaPorLocalidad');
Route::get('/reporte/sucursal' , 'ReporteController@localidad');
Route::get('/reporte/primeraCalidad' , 'ReporteController@primeraCalidad');
Route::get('/reporte/telaDefectuosa' , 'ReporteController@telaDefectuosa');
Route::get('/reporte/{id}', 'ReporteController@verlocalidad')->where('id', '[0-9]+')->name('show');


Route::get('login' , 'Auth\LoginController@showLoginForm');
Route::post('login' , 'Auth\LoginController@Login');
Route::get('logout' , 'Auth\LoginController@logout');



Route::get('/transaction' , 'TransactionController@index');
Route::get('/transaction/{tela}/editarSucursal','TransactionController@editarSucursal');
Route::get('/transaction/{tela}/editarCalidad','TransactionController@editarCalidad');
Route::put('/transaction/{tela}/actualizarCalidad','TransactionController@actualizarCalidad');
Route::put('/transaction/{tela}/actualizarSucursal','TransactionController@actualizarSucursal');
Route::put('/transaction/{tela}/darBaja','TransactionController@darBaja');
Route::put('/transaction/{tela}/darBajaA','TransactionController@darBajaA');
Route::put('/transaction/{tela}/darAlta','TransactionController@darAlta');
Route::get('/transaction/{id}', 'TransactionController@show')->where('id', '[0-9]+');



