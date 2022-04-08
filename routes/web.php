<?php

use GuzzleHttp\Middleware;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group( function(){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
});
Route::get('/create_tender', [App\Http\Controllers\Admin\CreateTenderController::class, 'index']);

Route::middleware(['role:manager'])->prefix('manager_panel')->group( function(){
    Route::get('/', [App\Http\Controllers\Manager\HomeController::class, 'index'])->name('homeManager');
});
