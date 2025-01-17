<?php

use App\Http\Controllers\TestController;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [TestController::class, 'LogIn'])->name('test.LogIn');
Route::get('/dasboard', [TestController::class, 'Dasboard'])->name('test.Dashboard');
Route::get('/data-place', [TestController::class, 'Data_Place'])->name('test.index.places');
