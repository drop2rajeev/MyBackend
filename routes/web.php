<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index'])->name('welcome');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('home', [HomeController::class, 'dashboard'])->name('home');
});
