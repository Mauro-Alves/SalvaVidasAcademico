<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// Pagina inicial Site Salva Vidas Academico

Route::get('/index-site', [SiteController::class, 'index'])->name('site.index');

// Dashboard Salva Vidas Academico


