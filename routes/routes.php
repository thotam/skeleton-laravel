<?php

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

Route::domain((config('dtp.domain.sub') ? config('dtp.domain.sub') . "." : "") . config('dtp.domain.main'))->group(function () {
    Route::middleware(['web', 'auth', 'CheckAccountAndHr'])->group(function () {});
});
