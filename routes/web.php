<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');
// Route::get('/feed/{category}/', [SiteController::class, 'category'])->name('feeds.category');
Route::get('/feed/{category}/{group}/{feed}', [SiteController::class, 'show'])->name('feeds.show');

// Route::get('/', function () {
//  return view('welcome');
// });
