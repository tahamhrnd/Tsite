<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Logincontroller;

Route::get('/' , [Logincontroller::class , 'index']);
Route::get('redirect', [Logincontroller::class, 'redirect']);
