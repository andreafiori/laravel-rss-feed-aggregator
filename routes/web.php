<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/feed/{category}/{group}/{feedSlug}', [SiteController::class, 'details'])->name('feeds.details');
// Route::get('/feed/{category}/{group}/{feed}', [SiteController::class, 'show'])->name('feeds.show');

// Route::get('/', function () {
//  return view('welcome');
// });
