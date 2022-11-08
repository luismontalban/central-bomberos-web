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

Route::get('/', function () {

   $datos = DB::table('emergencia')
                ->where('estado', '=', 'Ocurrida')
                ->orderBy('fecha_emer', 'desc')
                ->paginate(5);

    return view('inicio', [
        'datoss' => $datos]);
})->name('principal');


Route::get('/quiensomos', 'UsuarioController@quien')->name('quien');



//RUTAS DEL LOGIN AQUI

Route::get('/login', 'UsuarioController@iniciar')->name('login');

Route::post('/loginprocess', 'Auth\LoginController@authenticate')->name('logueo');

Route::get('/inicio', 'Auth\LoginController@inicio')->name('init')->middleware('auth');
;


Route::get('/cerrarsesion', 'Auth\LoginController@logout')->name('salir')->middleware('cerrarmiddleware');


//
//Mostrar datos del usuario
Route::get('/misdatos', 'UsuarioController@misdatos')->name('misdatos');
//Route::get('/', 'UsuarioController@index');

//RUTAS DE LAS EMERGENCIAS

Route::get('/emergencia', 'EmergenciaController@index')->name('emergencia');
Route::post('savemer', 'EmergenciaController@save');
Route::get('/menuver', 'EmergenciaController@menuVer')->name('menuver');
Route::get('editar/{id}', 'EmergenciaController@edit');
Route::post('update', 'EmergenciaController@update');
Route::get('/moduloprincipal', 'EmergenciaController@inicioo')->name('volverinicio');




//RUTAS DEL PARTE DE EMERGENCIA

Route::get('/parte', 'ParteController@index')->name('partemergencia');
Route::get('/generarparte', 'ParteController@generarParte')->name('generarparte');
Route::get('guardar/{id}', 'ParteController@edit');
Route::get('/menu', 'ParteController@inicio');
Route::post('saveparte', 'ParteController@saveparte');


//VER LOS PARTES PARA ACTUALIZAR
Route::get('/verpartes', 'ParteController@verParte')->name('verp');
Route::get('editarparte/{id}', 'ParteController@editp');
Route::post('updatep', 'ParteController@updateparte');




//RUTAS DE LAS BITACORAS

Route::get('/bitacora', 'BitacoraController@index')->name('bitacoram');
Route::post('savebitacora', 'BitacoraController@savebitacoraa');
Route::get('/verbitacoras', 'BitacoraController@verbitacoras')->name('verbita');
Route::get('editarbitacora/{id}', 'BitacoraController@editbita');
Route::post('updateb', 'BitacoraController@updatebitacora');
//Route::get('/index', 'BitacoraController@menup')->name('homemenu');



//RUTAS DE LOS VOLUNTARIOS
Route::get('/modulovoluntarios', 'VoluntarioController@index')->name('volm');
Route::post('save', 'VoluntarioController@savevol');
Route::post('updatevol', 'VoluntarioController@update');
Route::get('/vervoluntarios', 'VoluntarioController@vervoluntarios')->name('verbitacorass');


//RUTAS DE LA SIRENA

Route::get('/sirenalogin', 'SirenaController@index')->name('initsirena');
Route::post('access', 'SirenaController@init')->name('loginaccesirena');