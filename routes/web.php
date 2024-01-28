<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CountModulController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ModulController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MainController::class, 'index']);
Route::get('game/{id}', [MainController::class, 'game'])->name('game');

Route::resource('category', CategoryController::class);
Route::resource('modul', ModulController::class);

Route::get('count-no/{id}', [CountModulController::class, 'no'])->name('count.no');
Route::get('count-yes/{id}', [CountModulController::class, 'yes'])->name('count.yes');

