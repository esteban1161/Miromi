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

Route::get('/', 'inicioController@index');


//Route::group(['prefix' => 'admin', 'nameSpace' => 'admin'], function () {});


Route::get('admin/rol', 'Admin\RolController@index')->name('rol.index');
Route::get('admin/rol/crear', 'Admin\RolController@create')->name('rol.create');
Route::post('admin/rol', 'Admin\RolController@store')->name('rol.store');    

Route::get('admin/paciente', 'Admin\PacienteController@index')->name('paciente.index');
Route::get('admin/paciente/crear', 'Admin\PacienteController@create')->name('paciente.create');
Route::post('admin/paciente', 'Admin\PacienteController@store')->name('paciente.store');    

Route::get('admin/menu', 'Admin\menuController@index')->name('menu.index');
Route::get('admin/menu/crear', 'Admin\menuController@create')->name('menu.create');
Route::post('admin/menu', 'Admin\menuController@store')->name('menu.store');
Route::post('admin/menu/guardar-orden', 'Admin\menuController@guardarOrden')->name('menu.guardarOrden');





