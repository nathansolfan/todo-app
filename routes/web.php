<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index']);

Route::get('/create', [TaskController::class, 'create'])->name('create');
Route::post('/create', [TaskController::class, 'store'])->name('store');



// Route::resource('tasks', [TaskController::class]);
