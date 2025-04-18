<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Routes pour les services
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.show');

// Routes pour les demandes de devis
Route::get('/devis', [ServiceController::class, 'quote'])->name('service.quote');
Route::post('/devis', [ServiceController::class, 'submitQuote'])->name('service.quote.submit');
Route::get('/devis/confirmation', [ServiceController::class, 'quoteSuccess'])->name('service.quote.success');

// Route pour la page des compétences (skills)
Route::get('/skills', [SkillController::class, 'index'])->name('skill.index');



