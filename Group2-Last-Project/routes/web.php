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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('about', 'App\Http\Controllers\PagesController@about');
Route::get('contact', 'App\Http\Controllers\PagesController@contact');
Route::get('modalwindow', 'App\Http\Controllers\PagesController@modalwindow');
Route::get('properties', 'App\Http\Controllers\PagesController@properties');
Route::get('navbar', 'App\Http\Controllers\PagesController@navbar');
Route::resource('agent', 'App\Http\Controllers\ContactsController');

// Route::get('/home', 'App\Http\Controllers\HomeController::class, 'index')->name('home');
