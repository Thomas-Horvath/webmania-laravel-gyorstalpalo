<?php

use App\Http\Controllers\AitoolsController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base');
});

Route::resource('categories', categoriesController::class);
Route::resource('aitools', AitoolsController::class);
Route::resource('tags', TagsController::class);
