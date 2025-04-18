<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AdminController;

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

// Routes pour l'administration
Route::prefix('admin')->name('admin.')->group(function () {
    // Routes d'authentification
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

    // Routes protégées par l'authentification
    Route::middleware(['auth'])->group(function () {
        // Tableau de bord
        Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

        // Gestion des services
        Route::get('/services', [AdminController::class, 'services'])->name('services');
        Route::get('/services/create', [AdminController::class, 'createService'])->name('services.create');
        Route::post('/services', [AdminController::class, 'storeService'])->name('services.store');
        Route::get('/services/{service}/edit', [AdminController::class, 'editService'])->name('services.edit');
        Route::put('/services/{service}', [AdminController::class, 'updateService'])->name('services.update');
        Route::delete('/services/{service}', [AdminController::class, 'deleteService'])->name('services.delete');

        // Gestion des demandes de devis
        Route::get('/quotes', [AdminController::class, 'quotes'])->name('quotes');
        Route::get('/quotes/{quote}', [AdminController::class, 'showQuote'])->name('quotes.show');
        Route::put('/quotes/{quote}/process', [AdminController::class, 'markQuoteAsProcessed'])->name('quotes.process');
        Route::delete('/quotes/{quote}', [AdminController::class, 'deleteQuote'])->name('quotes.delete');
    });
});



