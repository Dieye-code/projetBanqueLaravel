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

//Route Get

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Client','Client@add');
Route::get('/Compte','Compte@add');

//Route Post

Route::post('/Client', "Client@insert");
Route::post('/Compte', "Compte@insert");
