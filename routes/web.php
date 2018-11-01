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
Route::get('/bienvenida', function () {
    return view('publico.bienvenido');
});


/*****************************************
******* U N I V E R S I D A D E S *******
*****************************************/
Route::get('/universidades', 'UniversityController@list');
Route::post('universidades/nuevo', 'UniversityController@create');

Route::get('universidades/nuevo', function () {
  return view('universidades.nuevo');
});

/*****************************************
******* E S T U D I A N T E S *******
*****************************************/
Route::get('/estudiantes', 'StudentController@list');

Route::post('estudiantes/nuevo', 'StudentController@create');

Route::get('estudiantes/nuevo', function () {
  return view('estudiantes.nuevo');
});

Route::get('/logout', function () {
    return view('publico.despedida');
});
