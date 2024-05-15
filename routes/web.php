<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use App\Http\Controllers\PropertyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::resource('/properties', '\App\Http\Controllers\PropertyController');
Route::get('/login', [UserController::class,'login'])->name('loginPage');
Route::post('/login', [UserController::class,'authenticate'])->name('login');
Route::post('/registration', [UserController::class, 'registration'])->name('registration');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/', [PropertyController::class, 'welcome'])->name('welcome');






