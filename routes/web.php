<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontendControllers\WebsiteController;

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

Route::get('/',[WebsiteController::class,'index'])->name('landingpage');
Route::get('pdf-to-word',[WebsiteController::class,'pdf2word'])->name('pdf2word');
Route::get('pdf-to-excel',[WebsiteController::class,'pdf2excel'])->name('pdf2excel');
Route::get('word-to-pdf',[WebsiteController::class,'word2pdf'])->name('word2pdf');


Route::post('file',[WebsiteController::class,'convertFile'])->name('convertFile');

Route::post('send-file-to-server',[WebsiteController::class,'sendFilesToServer'])->name('sendFilesToServer');



// test functions

Route::get('test',[WebsiteController::class,'testtest']);


// ajax routest
Route::post('sendfiletoserver',[WebsiteController::class,'sendFileToServer'])->name('sendFileToServer');

