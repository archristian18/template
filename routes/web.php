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



Route::get('/', [App\Http\Controllers\sample::class, 'index'])->name('index');
Route::get('newcontent', [App\Http\Controllers\sample::class, 'game'])->name('newcontent');

Route::get('/login', [App\Http\Controllers\sample::class, 'check'])->name('login');