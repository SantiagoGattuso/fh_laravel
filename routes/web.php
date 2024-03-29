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
    return view('welcome');
});

Route::get("/home", "HomeController@home");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/somos",function(){
  return view("somos");
});
Route::get("/contacto",function(){
  return "contacto";
});
Route::get("/productos","ProductosController@listado");

Route::get("/detalle",function(){
  return "detalle";
});
