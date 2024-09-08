<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;


Route::get('/' , [Logincontroller::class , 'index']);
Route::get('/logint',[Logincontroller::class ,'Logint']);
Route::get('/Register',[\App\Http\Controllers\Registercontroller::class,'Register']);
Route::get('redirect', [Logincontroller::class, 'redirect']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
