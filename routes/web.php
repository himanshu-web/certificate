<?php

use Illuminate\Support\Facades\Route;
// use PDF;
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
Route::get('/record', [App\Http\Controllers\Admin\AdminController::class, 'record'])->name('home');
Route::get('/record', [App\Http\Controllers\Admin\AdminController::class, 'record'])->name('record');
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
Route::post('/show/{id}', [App\Http\Controllers\Admin\AdminController::class, 'show_certificate'])->name('show');
Route::post('/destroy/{id}', [App\Http\Controllers\Admin\AdminController::class, 'destroy'])->name('destroy');
Route::post('/importRecord',[App\Http\Controllers\Admin\AdminController::class, 'importRecord'])->name('importRecord');
Route::get('/pdf_gen/{id}',[App\Http\Controllers\HomeController::class,'pdfGen'])->name('pdfGen');
