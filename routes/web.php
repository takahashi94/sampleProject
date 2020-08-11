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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TaskController@index')->name('tasks.index');
Route::post('/tasks/delete/{id}', 'TaskController@delete')->name('tasks.delete');

// Route::resource('post', 'PostController')->only([
//   'index', 'show'
// ]);

// Route::resource('post', 'PostController')->except([
//   'create', 'store', 'edit', 'update', 'destroy'
// ]);

Route::get('/users', 'CsvController@csv')->name('csv.index');
Route::post('/users', 'CsvController@postCsv')->name('csv.post');