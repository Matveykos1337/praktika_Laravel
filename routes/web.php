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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/admin',
    'App\Http\Controllers\AdminController@showAll'
)->middleware(['auth'])->name('admin');

Route::post('/user/submit', 'App\Http\Controllers\ContactController@submit')->middleware('auth')->name('users');

Route::get('/user-show', 'App\Http\Controllers\ContactController@showByUser')->name('user-show');

Route::get(
    '/user-delete/{id}/delete',
    'App\Http\Controllers\ContactController@deleteMessage'
    )->name('user-delete');

Route::get('/welcome', function () {
    return view('welcome');
    })->name('welcome'); 
Route::get('/user', function () {
    return view('user');
    })->name('user'); 
Route::get('/vhod', function () {
    return view('vhod');
    })->name('vhod'); 
Route::get('/zareg', function () {
    return view('zareg');
    })->name('zareg'); 
