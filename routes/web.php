<?php

use App\Http\Controllers\AitoolsController;
use App\Http\Controllers\categoriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('categories', categoriesController::class);
Route::resource('aitools', AitoolsController::class);
