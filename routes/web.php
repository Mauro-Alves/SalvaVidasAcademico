<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/index-site', [SiteController::class, 'index'])->name('site.index');

