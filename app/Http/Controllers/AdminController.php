<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Quote;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Affiche le tableau de bord d'administration
     *
     * @return \Illuminate\View\View
     */
    public function dashboard()
    {
        // Statistiques de base
        $services = Service::count();
        $quotes = Quote::count();
        $skills = Skill::count();
        $projects = Project::count();
        $testimonials = Testimonial::count();

        // Demandes de devis récentes
        $recentQuotes = Quote::orderBy('created_at', 'desc')->take(5)->get();

        // Statistiques des demandes de devis par mois (pour le graphique)
        $quotesByMonth = Quote::select(DB::raw("MONTH(created_at) as month"), DB::raw('COUNT(*) as count'))
            ->whereYear('created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get()
            ->pluck('count', 'month')
            ->toArray();

        // Formater les données pour le graphique
        $months = [];
        $quoteCounts = [];

        for ($i = 1; $i <= 12; $i++) {
            $months[] = date('F', mktime(0, 0, 0, $i, 1));
            $quoteCounts[] = $quotesByMonth[$i] ?? 0;
        }

        // Statistiques des services les plus demandés
        $topServices = Quote::select('service', DB::raw('COUNT(*) as count'))
            ->groupBy('service')
            ->orderByDesc('count')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'services', 'quotes', 'skills', 'projects', 'testimonials',
            'recentQuotes', 'months', 'quoteCounts', 'topServices'
        ));
    }

    /**
     * Affiche la liste des services
     *
     * @return \Illuminate\View\View
     */
    public function services()
    {
        $services = Service::orderBy('order')->get();

        return view('admin.services.index', compact('services'));
    }

    /**
     * Affiche le formulaire de création d'un service
     *
     * @return \Illuminate\View\View
     */
    public function createService()
    {
        return view('admin.services.create');
    }

    /**
     * Enregistre un nouveau service
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:services',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'price_label' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $data = $request->all();

        // Générer un slug si non fourni
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Définir l'ordre par défaut si non fourni
        if (empty($data['order'])) {
            $data['order'] = Service::max('order') + 1;
        }

        // Créer le service
        $service = Service::create($data);

        // Ajouter les caractéristiques si fournies
        if ($request->has('features')) {
            $features = $request->input('features');
            foreach ($features as $feature) {
                if (!empty($feature)) {
                    $service->features()->create(['feature' => $feature]);
                }
            }
        }

        return redirect()->route('admin.services')->with('success', 'Service créé avec succès');
    }

    /**
     * Affiche le formulaire d'édition d'un service
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\View\View
     */
    public function editService(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Met à jour un service
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateService(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:services,slug,' . $service->id,
            'description' => 'required|string',
            'image' => 'nullable|string',
            'price_label' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $data = $request->all();

        // Générer un slug si non fourni
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        // Mettre à jour le service
        $service->update($data);

        // Mettre à jour les caractéristiques si fournies
        if ($request->has('features')) {
            // Supprimer les caractéristiques existantes
            $service->features()->delete();

            // Ajouter les nouvelles caractéristiques
            $features = $request->input('features');
            foreach ($features as $feature) {
                if (!empty($feature)) {
                    $service->features()->create(['feature' => $feature]);
                }
            }
        }

        return redirect()->route('admin.services')->with('success', 'Service mis à jour avec succès');
    }

    /**
     * Supprime un service
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteService(Service $service)
    {
        // Supprimer les caractéristiques associées
        $service->features()->delete();

        // Supprimer le service
        $service->delete();

        return redirect()->route('admin.services')->with('success', 'Service supprimé avec succès');
    }

    /**
     * Affiche la liste des demandes de devis
     *
     * @return \Illuminate\View\View
     */
    public function quotes()
    {
        $quotes = Quote::orderBy('created_at', 'desc')->get();

        return view('admin.quotes.index', compact('quotes'));
    }

    /**
     * Affiche les détails d'une demande de devis
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\View\View
     */
    public function showQuote(Quote $quote)
    {
        return view('admin.quotes.show', compact('quote'));
    }

    /**
     * Marque une demande de devis comme traitée
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\RedirectResponse
     */
    public function markQuoteAsProcessed(Quote $quote)
    {
        $quote->update(['status' => 'completed']);

        return redirect()->route('admin.quotes')->with('success', 'Demande de devis marquée comme traitée');
    }

    /**
     * Supprime une demande de devis
     *
     * @param  \App\Models\Quote  $quote
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteQuote(Quote $quote)
    {
        $quote->delete();

        return redirect()->route('admin.quotes')->with('success', 'Demande de devis supprimée avec succès');
    }

    /**
     * Affiche le formulaire de connexion
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Traite la tentative de connexion
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
        ]);
    }

    /**
     * Déconnecte l'utilisateur
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
