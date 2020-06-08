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

Route::get('/', 'InicioController@index')->name('inicio.index');

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

/*Rutas del Terapeuta */
Route::get('admin/terapeuta', 'PerfilTerapeutaController@index')->name('terapeuta.index')->middleware('auth');
Route::get('admin/terapeuta/crear', 'PerfilTerapeutaController@create')->name('terapeuta.create')->middleware('auth');
Route::get('admin/terapeuta/{id}/editar', 'PerfilTerapeutaController@edit')->name('terapeuta.edit')->middleware('auth');
Route::post('admin/terapeuta', 'PerfilTerapeutaController@store')->name('terapeuta.store')->middleware('auth');   
Route::put('admin/terapeuta/{id}', 'PerfilTerapeutaController@update')->name('terapeuta.update')->middleware('auth'); 

/*Rutas del RIPF*/
Route::get('/ripf', 'RipfController@index')->name('ripf.index')->middleware('auth');
Route::post('/ripf/fecha', 'RipfController@fecha')->name('ripf.fecha')->middleware('auth');

/*Rutas del Paciente */
Route::get('/paciente', 'PerfilPacienteController@index')->name('paciente.index')->middleware('auth'); 
Route::get('/paciente/crear', 'PerfilPacienteController@create')->name('paciente.create')->middleware('auth');
Route::get('/paciente/{id}', 'PerfilPacienteController@show')->name('paciente.show')->middleware('auth');
Route::get('/paciente/{id}/editar', 'PerfilPacienteController@edit')->name('paciente.edit')->middleware('auth');   
Route::post('/paciente', 'PerfilPacienteController@store')->name('paciente.store')->middleware('auth');    
Route::put('/paciente/{id}', 'PerfilPacienteController@update')->name('paciente.update')->middleware('auth');
Route::get('/paciente/ciudadPorPais/{id}', 'PerfilPacienteController@SelectCiudad');

/*Rutas para ListaAtenciones*/ 
Route::get('/paciente/{id}/listaAtenciones', 'ListaAtencionesController@index')->name('listaAtenciones.index')->middleware('auth');

/*Rutas de Historias Clinicas */
Route::get('/paciente/{id}/historiaClinica/crear', 'HistoriaClinicaBController@create')->name('historiaC.create')->middleware('auth');
Route::get('/paciente/{id}/historiaClinica/{idh}', 'HistoriaClinicaBController@show')->name('historiaC.show')->middleware('auth');
Route::post('/paciente/{id}/historiaClinica', 'HistoriaClinicaBController@store')->name('historiaC.store')->middleware('auth');
Route::get('/paciente/{id}/historiaClinica/{idh}/pdf', 'HistoriaClinicaBController@crearPDF')->name('historiaC.crearPDF')->middleware('auth');

/*Rutas para historias clinicas en blanco*/
Route::get('/paciente/{id}/historiaBlanco/crear', 'HistoriaBlancoController@create')->name('historiaB.create')->middleware('auth');
Route::get('/paciente/{id}/historiaBlanco/{idh}', 'HistoriaBlancoController@show')->name('historiaB.show')->middleware('auth');
Route::post('/paciente/{id}/historiaBlanco', 'HistoriaBlancoController@store')->name('historiaB.store')->middleware('auth');

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

Route::get('/blanco', function () {
    return view('historiaClinicaBlanco.index');   
});

use App\Models\Pais;
use Illuminate\Http\Response;

Route::get('/ejemploFormulas', function () {
    $paises = Pais::orderBy('id')->get();
    return view ('formulas.index', compact('paises'));
});


Route::get('/paises', function () {
    
    $paises = Pais::orderBy('id')->get();
    return $paises;
});

use App\Models\Cie10;
Route::get('/cie10', function () {
    
    $cie10 = Cie10::orderBy('id')->get();
    $cie10J = json_encode($cie10);
    return $cie10J;
});
