<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MagangController;

Route::get('/', function () {
    return view('welcome');})->name('welcome');

Route::middleware('isLogin')->group(function(){
    //Login
    Route::get('login', [AuthController::class, 'login'])->name('login'); 
    Route::post('login', [AuthController::class, 'loginProcess'])->name('loginProcess');
});

//Logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout'); 

Route::middleware('checkLogin')->group(function(){

    //Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Magang
    Route::get('magang', [MagangController::class, 'index'])->name('magang');
    Route::get('magang/pdf', [MagangController::class, 'pdf'])->name('magangPdf');

    Route::middleware('isAdmin')->group(function(){
    
        //User
        Route::get('user', [UserController::class, 'index'])->name('user'); 
        Route::get('user/create', [UserController::class, 'create'])->name('userCreate'); 
        Route::post('user/store', [UserController::class, 'store'])->name('userStore');
        Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('userEdit');
        Route::post('user/update/{id}', [UserController::class, 'update'])->name('userUpdate');
        Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->name('userDestroy');
        Route::get('user/excel', [UserController::class, 'excel'])->name('userExcel');
        Route::get('user/pdf', [UserController::class, 'pdf'])->name('userPdf');

        //Magang 
        Route::get('magang/create', [MagangController::class, 'create'])->name('magangCreate');
        Route::post('magang/store', [MagangController::class, 'store'])->name('magangStore');
        Route::get('magang/edit/{id}', [MagangController::class, 'edit'])->name('magangEdit');
        Route::post('magang/update/{id}', [MagangController::class, 'update'])->name('magangUpdate');
        Route::delete('magang/destroy/{id}', [MagangController::class, 'destroy'])->name('magangDestroy');
        Route::get('magang/excel', [MagangController::class, 'excel'])->name('magangExcel');

    });

});

