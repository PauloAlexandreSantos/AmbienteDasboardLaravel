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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Grupo de rotas autenticadas */
Route::middleware(['auth'])->group(function () {

    route::get('/', ['as' => 'admin.dashboard', 'uses' => 'HomeController@index']);
   
    /* 
    route::get('/contact/details/{id}', ['as' => 'site.contact.details', 'uses' => 'ContactController@show']);
    route::get('/contact/create', ['as' => 'site.contact.create', 'uses' => 'ContactController@create']);
    route::post('/contact/store', ['as' => 'site.contact.store', 'uses' => 'ContactController@store']);

    route::get('/contact/edit/{id}', ['as' => 'site.contact.edit', 'uses' => 'ContactController@edit']);
    route::put('/contact/update/{id}', ['as' => 'site.contact.update', 'uses' => 'ContactController@update']);

    route::get('/contact/delete/{id}', ['as' => 'site.contact.delete', 'uses' => 'ContactController@destroy']); */
});





/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
