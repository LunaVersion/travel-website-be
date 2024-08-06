<?php

// use App\Http\Controllers\ArticleController;

// Route::get('/news', [ArticleController::class, 'index'])->name('news.index');
// Route::get('/news/{slug}', [ArticleController::class, 'detail'])->name('news.detail');

use App\Http\Controllers\ArticleController;

Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
Route::get('/news', [ArticleController::class, 'index'])->name('templates.index');
Route::get('/news/{slug}', [ArticleController::class, 'showdetail'])->name('templates.showdetail');

