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

Route::get('/', ['as' => 'home',function () {
    return view('home');
}]);

Route::get('saludos/{nombre?}',['as' => 'saludos',function($nombre = "invitado"){
    $opciones = [
        "opcion 1",
        "opcion 2",
        "opcion 3",
        "opcion 4"
    ];
    return view('saludos',compact('nombre','opciones'));
}]);

Route::get('contactos',['as' => 'contactos',function(){
    return view('contactos');
}]);