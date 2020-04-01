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
    $helloWorld = "Coe Meu bom";
    //return view('welcome', ['helloWorld' => $helloWorld]);

    // Cria array associativo com o valor do nome da variavel da string
    return view('welcome', compact('helloWorld'));
});
