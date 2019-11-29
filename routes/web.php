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

//Route::get('/', function () {
//    return redirect()->route('livros.index');
//});

Route::resources([
    'livros'    => 'LivroController',
    'clientes'  => 'ClienteController',
    'editoras'  => 'EditoraController',
    'generos'   => 'GeneroController',
]);

Route::get('livros/{livro}/rent', 'LivroController@rent')->name('livros.rent');
Route::get('livros/{livro}/giveback', 'LivroController@giveback')->name('livros.giveback');
