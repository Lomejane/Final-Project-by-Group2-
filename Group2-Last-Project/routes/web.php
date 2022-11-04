<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
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
Route::get('navbar', 'App\Http\Controllers\PagesController@navbar');
Route::get('footer', 'App\Http\Controllers\PagesController@footer');
Route::get('about', 'App\Http\Controllers\PagesController@about');
Route::get('contact', 'App\Http\Controllers\PagesController@contact');
Route::get('pricing', 'App\Http\Controllers\PagesController@pricing');
Route::get('modalwindow', 'App\Http\Controllers\PagesController@modalwindow');

// Route::get('properties', 'App\Http\Controllers\PagesController@properties');
Route::get('signup', 'App\Http\Controllers\PagesController@signup');
Route::get('signin', 'App\Http\Controllers\PagesController@signin');
Route::get('agentaccount', 'App\Http\Controllers\PagesController@agentaccount');
Route::get('ownersaccount', 'App\Http\Controllers\PagesController@ownersaccount');
Route::get('adminsidebar', 'App\Http\Controllers\PagesController@adminsidebar');
Route::get('users', 'App\Http\Controllers\PagesController@users');
Route::get('dashboard', 'App\Http\Controllers\PagesController@dashboard');
Route::get('adduser', 'App\Http\Controllers\PagesController@adduser');
Route::get('usermanagement', 'App\Http\Controllers\PagesController@usermanagement');
Route::get('propertylist', 'App\Http\Controllers\PagesController@propertylist');
Route::get('agentdashboard', 'App\Http\Controllers\PagesController@agentdashboard');
Route::get('profile', 'App\Http\Controllers\PagesController@profile');
Route::get('listings', 'App\Http\Controllers\PagesController@listings');
Route::get('agentprofile', 'App\Http\Controllers\PagesController@agentprofile');
// Route::resource('homepageproperties', 'App\Http\Controllers\HomePagePropertiesController');

//  Routes for Sign Up
Route::get('signupowner', 'App\Http\Controllers\PagesController@signupowner');
Route::get('signupagent', 'App\Http\Controllers\PagesController@signupagent');
Route::get('signupadmin', 'App\Http\Controllers\PagesController@signupadmin');

//  Routes for Sign In
Route::get('signinowner', 'App\Http\Controllers\PagesController@signinowner');
Route::get('signinagent', 'App\Http\Controllers\PagesController@signinagent');
Route::get('signinadmin', 'App\Http\Controllers\PagesController@signinadmin');


//  Routes for Home Images
// Route::get('/add-image', [HomeImagesController::class, 'create'])->name('image.add');



// Route::get('properties', 'App\Http\Controllers\PagesController@properties');
Route::resource('agent', 'App\Http\Controllers\ContactsController');
// Route::resource('properties', 'App\Http\Controllers\PropertiesController');
Route::get('properties', [App\Http\Controllers\PropertiesController::class,'index'])->name('properties.index');
Route::get('searchproperties', [App\Http\Controllers\PropertiesController::class,'search'])->name('properties.search');
Route::get('filterproperties', [App\Http\Controllers\PropertiesController::class,'filter'])->name('properties.filter');
Route::resource('province', 'App\Http\Controllers\ProvinceController');
// Auth::routes();

Route::get('/add-image', [ImageController::class, 'create'])->name('image.add');
Route::post('/store-image', [ImageController::class, 'store'])->name('image.store');
Route::get('/show-image', [ImageController::class, 'show'])->name('image.show');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();


Route::get('navbar', 'App\Http\Controllers\PagesController@navbar');
// Route::resource('agent', 'App\Http\Controllers\ContactsController');

// Route::get('/home', 'App\Http\Controllers\HomeController::class, 'index')->name('home');

