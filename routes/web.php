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
    return view('web.inicio');
}); 


Route::get('/conocer_plan/{plan}','SolicitarInformacionPlanes@formulario_planes',['plan'=>'$plan']); 
Route::post('/conocer_plan','SolicitarInformacionPlanes@enviar_formulario'); 


Route::get('/consulta','ControladorPagina@formulario_consulta'); 
Route::post('/consulta','ControladorPagina@enviar_consulta'); 


Route::get('/centros', function () {
    return view('web.centros');
});


Route::get('/saludvirtual', function () {
    return view('web.saludvirtual');
});

Route::get('/farmacias', function () {
    return view('web.farmacias');
});
  
Route::get('/localidades','SolicitarInformacionPlanes@getLocalidades'); 

Auth::routes();

Route::get('/plan/{plan}', 'ControladorPagina@plan', ['plan' => '$plan']);
Route::get('/prestadores', function () {
    return view('web.prestadores');
});

Route::get('/archivo/{archivo}', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/fuente/'.$archivo.'.pdf';
     
      return response()->download($url);
     

});


Route::get('/prueba','Administracion@prueba'); 
 
Route::get('/admin','Administracion@inicio'); 


Route::resource('admin/category','Admin\AdminCategoryController')->names('admin.category');
Route::resource('admin/especialidad','Admin\AdminEspecialidadController')->names('admin.especialidad');
Route::resource('admin/prestador','Admin\AdminPrestadorController')->names('admin.prestador');


Route::get('cancelar/{ruta}',function($ruta){
    return redirect()->route($ruta)->with('cancelar','Acción cancelada');
})->name('cancelar');