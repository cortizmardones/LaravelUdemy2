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

//Ruta prueba
Route::get('/productos','PruebaController@welcome');


//Ruta para los mantenedores
Route::get('/admin/products','ProductController@index'); //listado
Route::get('/admin/products/create','ProductController@create'); //formulario
Route::post('/admin/products','ProductController@store'); //registrar


//Ruta que tienen seguridad con middleware auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
