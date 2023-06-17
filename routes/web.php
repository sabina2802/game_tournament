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

Auth::routes();

Route::GET('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::GET('/users/create', [App\Http\Controllers\userController::class, 'userCreate'])->name('userCreate');

Route::POST('/users/store', [App\Http\Controllers\userController::class, 'userstore'])->name('userStore');

Route::GET('/users/tournament', [App\Http\Controllers\userController::class, 'index'])->name('index');


