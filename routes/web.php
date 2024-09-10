<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class, 'index'])->name('index');

// Route::get('/create', [TaskController::class, 'create'])->name('create');
// Route::post('/create', [TaskController::class, 'store'])->name('store');
// Route::get('/task/{id}', [TaskController::class, 'show'])->name('show');



Route::resource('tasks', TaskController::class);
