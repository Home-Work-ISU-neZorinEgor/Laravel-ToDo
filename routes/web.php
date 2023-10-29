<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\TodoController@index');
Route::get('/todos', 'App\Http\Controllers\TodoController@viewTodos');
Route::post('/todos', 'App\Http\Controllers\TodoController@store');
Route::get('/view-todos', 'App\Http\Controllers\TodoController@viewTodosList');

