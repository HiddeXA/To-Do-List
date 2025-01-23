<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::controller(TodoController::class)->group(function () {
    Route::get('/', 'index');
});
