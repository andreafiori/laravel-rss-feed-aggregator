<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/feed/{category}/{group}/{feedSlug}', [SiteController::class, 'details'])->name('feeds.details');
