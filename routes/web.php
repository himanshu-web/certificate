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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/record', [App\Http\Controllers\Admin\AdminController::class, 'record'])->name('record');
Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
Route::post('/show', [App\Http\Controllers\Admin\AdminController::class, 'show_certificate'])->name('show');
Route::post('/importRecord',[App\Http\Controllers\Admin\AdminController::class, 'importRecord'])->name('importRecord');

Route::get('/pdf_gen',[App\Http\Controllers\HomeController::class,'pdfGen'])->name('pdfGen');

Route::get('/show/pdf',function (){
	$data = \App\Models\Record::where('id',10)->first();
	// return $data;
	// $pdf = PDF::loadView('Admin.Header.generate',$data);
	// return $pdf->download('invoice.pdf');
    return view('Admin.Header.generate',$data);
});