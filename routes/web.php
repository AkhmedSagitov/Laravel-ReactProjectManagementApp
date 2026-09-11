<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');


    Route::resource('project', ProjectController::class)->names([
        'index' => 'project',
    ]);

    Route::resource('task', TaskController::class)->names([
        'index' => 'task',
    ]);

    Route::resource('user', UserController::class)->names([
        'index' => 'user',
    ]);
});

require __DIR__.'/settings.php';
