<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PostController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'show'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/post', [PostController::class, 'index'])->name('post_index');

    Route::post('/post', [PostController::class, 'create'])->name('post_create');
    
    Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');
    
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit_post');

    Route::post('/edit/{id}', [PostController::class, 'update'])->name('update_post');

    Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('destroy_post');
});
 


require __DIR__.'/auth.php';
