<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backendControllers\authController;
use App\Http\Controllers\backendControllers\dashboardController;

Route::group(["prefix"=>"admin"],function(){
    Route::get("login",[authController::class,'get_login'])->name("get_login");
    Route::post("login",[authController::class,'login'])->name('login');
    Route::get('dashboard',[dashboardController::class,'dashboard'])->name("admin_dashboard");
});