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

Route::get('/', 'inicioController@index')->name('inicio.index');

Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login.login');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('login.logout');


/*RUTAS DEL ADMINISTRADOR*/
Route::get('admin', 'Admin\AdminController@index')->name('admin.index') ->middleware('auth');

/*Rutas del Rol*/
Route::get('admin/rol', 'Admin\RolController@index')->name('rol.index')->middleware('auth');
Route::get('admin/rol/crear', 'Admin\RolController@create')->name('rol.create')->middleware('auth');
Route::get('admin/rol/{id}/editar', 'Admin\RolController@edit')->name('rol.edit')->middleware('auth');;   
Route::post('admin/rol', 'Admin\RolController@store')->name('rol.store')->middleware('auth');
Route::put('admin/rol/{id}', 'Admin\RolController@update')->name('rol.update')->middleware('auth');
Route::delete('admin/rol/{id}', 'Admin\RolController@destroy')->name('rol.destroy')->middleware('auth');

/*Rutas del Paciente */
Route::get('admin/paciente', 'Admin\PacienteController@index')->name('paciente.index')->middleware('auth');
Route::get('admin/paciente/crear', 'Admin\PacienteController@create')->name('paciente.create')->middleware('auth');
Route::post('admin/paciente', 'Admin\PacienteController@store')->name('paciente.store')->middleware('auth');    

/*Rutas del Menu */
Route::get('admin/menu', 'Admin\menuController@index')->name('menu.index')->middleware('auth');
Route::get('admin/menu/crear', 'Admin\menuController@create')->name('menu.create')->middleware('auth');
Route::post('admin/menu', 'Admin\menuController@store')->name('menu.store')->middleware('auth');
Route::post('admin/menu/guardar-orden', 'Admin\menuController@guardarOrden')->name('menu.guardarOrden')->middleware('auth');

/*Rutas del Menu-Rol */
Route::get('admin/menu-rol', 'Admin\MenuRolController@index')->name('menuRol.index')->middleware('auth');
Route::post('admin/menu-rol', 'Admin\MenuRolController@store')->name('menuRol.store')->middleware('auth');





 