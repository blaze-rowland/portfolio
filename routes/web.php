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

Route::resource('posts', 'PostController');
Route::resource('revenue', 'RevenueController');
Route::resource('projects', 'ProjectController');
Route::resource('clients', 'ClientController');
Route::resource('notes', 'NoteController');
Route::get('/projects/{id}/notes/create', 'ProjectController@create_note')->name('projects.note.create');
Route::get('/projects/{id}/notes/edit', 'ProjectController@edit_note')->name('projects.note.edit');
Route::put('/projects/{id}/notes/create', 'ProjectController@update_note')->name('projects.note.update');
Route::put('/projects/{id}/notes/delete', 'ProjectController@delete_note')->name('projects.note.delete');
//Dashboard Routes
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/admin/posts', 'PostController@index')->name('posts');
Route::get('/admin/revenue', 'RevenueController@index')->name('revenue');
Route::get('/admin/projects', 'ProjectController@index')->name('projects');
Route::get('/admin/clients', 'ClientController@index')->name('clients');
Route::get('/admin/notes', 'NoteController@index')->name('notes');
