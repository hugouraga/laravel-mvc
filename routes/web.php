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


// rota '/' é a rota raiz do laravel
// Quando entrar na rota '/' chama a função que retorna a view welcome.

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login", ["uses" => "Controller@login"]);
Route::get("/cadastro", ["uses" => "Controler@cadastro"]);