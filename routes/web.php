<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
}); 


Route::get('/conocer_plan/{plan}','SolicitarInformacionPlanes@formulario_planes',['plan'=>'$plan']); 
Route::post('/conocer_plan','SolicitarInformacionPlanes@enviar_formulario'); 


Route::get('/consulta','ControladorPagina@formulario_consulta'); 
Route::post('/consulta','ControladorPagina@enviar_consulta'); 


Route::get('/centros', function () {
    return view('centros');
});

Route::get('/farmacias', function () {
    return view('farmacias');
});

Route::get('/localidades','SolicitarInformacionPlanes@getLocalidades');


Auth::routes();

Route::get('/plan/{plan}', 'ControladorPagina@plan', ['plan' => '$plan']);
Route::get('/prestadores', function () {
    return view('prestadores');
});
