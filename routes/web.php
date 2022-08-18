<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use Laravel\Socialite\Facades\Socialite;
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

Route::get('/', 'App\Http\Controllers\PageController@index');
// Route::get('/login', 'App\Http\Controllers\PageController@login');
Route::get('/about', 'App\Http\Controllers\PageController@about');
Route::get('/profile/', 'App\Http\Controllers\PageController@profile');
Route::get('/messages', 'App\Http\Controllers\MessageController@index');
Route::get('/contacts', 'App\Http\Controllers\PageController@contacts');

Route::resource('contacts', 'App\Http\Controllers\ContactsController');

// Route::controller(ImageController::class)->group(function () {
//     Route::get('/image', 'create')->name('image.create');
//     Route::post('/store-image', 'store')->name('image.store');
//     Route::get('/view-image', 'view');
// });

Route::get('/add-image', [ImageController::class, 'addImage'])->name('image.add');
Route::post('/store-image', [ImageController::class, 'storeImage'])->name('image.store');
Route::get('/view-image', [ImageController::class, 'viewImage'])->name('image.view');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback',[App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
 
