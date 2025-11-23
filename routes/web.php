<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\SkillController as AdminSkillController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;

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

// Routes pour le portfolio
Route::get('/portfolio', [App\Http\Controllers\ProjectController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{project:slug}', [App\Http\Controllers\ProjectController::class, 'show'])->name('portfolio.show');

// Route pour la page à propos
Route::get('/about', function () {
    return view('about', [
        'title' => 'À Propos | Issa Cissé - Graphiste',
        'bodyClass' => 'bg-darkBg text-white'
    ]);
})->name('about');

// Routes pour le contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

// Redirection de secours pour l'authentification
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

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

        // Gestion des compétences
        Route::get('/skills', [AdminSkillController::class, 'index'])->name('skills.index');
        Route::get('/skills/create', [AdminSkillController::class, 'create'])->name('skills.create');
        Route::post('/skills', [AdminSkillController::class, 'store'])->name('skills.store');
        Route::get('/skills/{skill}/edit', [AdminSkillController::class, 'edit'])->name('skills.edit');
        Route::put('/skills/{skill}', [AdminSkillController::class, 'update'])->name('skills.update');
        Route::delete('/skills/{skill}', [AdminSkillController::class, 'destroy'])->name('skills.destroy');

        // Gestion des projets
        Route::get('/projects', [AdminProjectController::class, 'index'])->name('projects.index');
        Route::get('/projects/create', [AdminProjectController::class, 'create'])->name('projects.create');
        Route::post('/projects', [AdminProjectController::class, 'store'])->name('projects.store');
        Route::get('/projects/{project}/edit', [AdminProjectController::class, 'edit'])->name('projects.edit');
        Route::put('/projects/{project}', [AdminProjectController::class, 'update'])->name('projects.update');
        Route::delete('/projects/{project}', [AdminProjectController::class, 'destroy'])->name('projects.destroy');

        // Gestion des témoignages
        Route::get('/testimonials', [AdminTestimonialController::class, 'index'])->name('testimonials.index');
        Route::get('/testimonials/create', [AdminTestimonialController::class, 'create'])->name('testimonials.create');
        Route::post('/testimonials', [AdminTestimonialController::class, 'store'])->name('testimonials.store');
        Route::get('/testimonials/{testimonial}/edit', [AdminTestimonialController::class, 'edit'])->name('testimonials.edit');
        Route::put('/testimonials/{testimonial}', [AdminTestimonialController::class, 'update'])->name('testimonials.update');
        Route::delete('/testimonials/{testimonial}', [AdminTestimonialController::class, 'destroy'])->name('testimonials.destroy');
    });
});
