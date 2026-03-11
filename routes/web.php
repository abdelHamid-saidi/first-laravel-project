<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create'])->name('articles.create');
    Route::get('/modifier/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('articles.delete');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('articles.show');
});

Route::fallback(function () {
    return response()->view('errors.not-found', [], 404);
});
