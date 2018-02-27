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
})->name('/');

Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('/test', 'HomeController@testbench')->name('test');

//Dashboard Routes

Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/admin/revenue', 'RevenueController@index')->name('revenue');
Route::get('/admin/projects', 'ProjectController@index')->name('projects');
Route::get('/admin/clients', 'ClientController@index')->name('clients');
Route::get('/admin/notes', 'NoteController@index')->name('notes');
Route::get('/admin/blog', 'PostController@index')->name('blog');
