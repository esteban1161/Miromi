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

/*RUTAS DEL ADMINISTRADOR*/
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login.login');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('login.logout');

/*RUTAS AJAX*/
Route::post('ajax-sesion', 'AjaxController@setSession')->name('ajax')->middleware('auth');

/*RUTAS DEL ADMINISTRADOR*/
Route::get('admin', 'Admin\AdminController@index')->name('admin.index') ->middleware('auth', 'superAdmin');

/*Rutas del Usuario*/
Route::get('admin/usuario', 'Admin\UsuarioController@index')->name('usuario.index')->middleware('auth', 'superAdmin');
Route::get('admin/usuario/crear', 'Admin\UsuarioController@create')->name('usuario.create')->middleware('auth', 'superAdmin');
Route::get('admin/usuario/{id}/editar', 'Admin\UsuarioController@edit')->name('usuario.edit')->middleware('auth', 'superAdmin');   
Route::post('admin/usuario', 'Admin\UsuarioController@store')->name('usuario.store')->middleware('auth', 'superAdmin');
Route::put('admin/usuario/{id}', 'Admin\UsuarioController@update')->name('usuario.update')->middleware('auth', 'superAdmin');
Route::delete('admin/usuario/{id}', 'Admin\UsuarioController@destroy')->name('usuario.destroy')->middleware('auth', 'superAdmin');


/*Rutas del Rol*/
Route::get('admin/rol', 'Admin\RolController@index')->name('rol.index')->middleware('auth', 'superAdmin');
Route::get('admin/rol/crear', 'Admin\RolController@create')->name('rol.create')->middleware('auth', 'superAdmin');
Route::get('admin/rol/{id}/editar', 'Admin\RolController@edit')->name('rol.edit')->middleware('auth', 'superAdmin');   
Route::post('admin/rol', 'Admin\RolController@store')->name('rol.store')->middleware('auth', 'superAdmin');
Route::put('admin/rol/{id}', 'Admin\RolController@update')->name('rol.update')->middleware('auth', 'superAdmin');
Route::delete('admin/rol/{id}', 'Admin\RolController@destroy')->name('rol.destroy')->middleware('auth', 'superAdmin');

/*Rutas del Paciente */
Route::get('admin/paciente', 'Admin\PacienteController@index')->name('paciente.index')->middleware('auth', 'superAdmin');
Route::get('admin/paciente/crear', 'Admin\PacienteController@create')->name('paciente.create')->middleware('auth', 'superAdmin');
Route::post('admin/paciente', 'Admin\PacienteController@store')->name('paciente.store')->middleware('auth', 'superAdmin');    

/*Rutas del Paciente */
Route::get('admin/terapeuta', 'Admin\TerapeutaController@index')->name('terapeuta.index')->middleware('auth', 'superAdmin');
Route::get('admin/terapeuta/crear', 'Admin\TerapeutaController@create')->name('terapeuta.create')->middleware('auth', 'superAdmin');
Route::post('admin/terapeuta', 'Admin\TerapeutaController@store')->name('terapeuta.store')->middleware('auth', 'superAdmin');    

/*Rutas del Menu */
Route::get('admin/menu', 'Admin\MenuController@index')->name('menu.index')->middleware('auth', 'superAdmin');
Route::get('admin/menu/crear', 'Admin\MenuController@create')->name('menu.create')->middleware('auth', 'superAdmin');
Route::get('admin/menu/{id}/editar', 'Admin\MenuController@edit')->name('menu.edit')->middleware('auth', 'superAdmin');
Route::post('admin/menu', 'Admin\MenuController@store')->name('menu.store')->middleware('auth', 'superAdmin');
Route::put('admin/menu/{id}', 'Admin\MenuController@update')->name('menu.update')->middleware('auth', 'superAdmin');
Route::get('admin/menu/{id}', 'Admin\MenuController@destroy')->name('menu.destroy')->middleware('auth', 'superAdmin');
Route::post('admin/menu/guardar-orden', 'Admin\MenuController@guardarOrden')->name('menu.guardarOrden')->middleware('auth', 'superAdmin');

/*Rutas del Menu-Rol */
Route::get('admin/menu-rol', 'Admin\MenuRolController@index')->name('menuRol.index')->middleware('auth', 'superAdmin');
Route::post('admin/menu-rol', 'Admin\MenuRolController@store')->name('menuRol.store')->middleware('auth', 'superAdmin');





 