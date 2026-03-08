<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return 'Docker Work Fine';
});

Route::get('/', [TodoController::class, 'index']);
Route::post('/add', [TodoController::class, 'store']);
