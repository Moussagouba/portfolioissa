<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Affiche la page d'accueil des services
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $services = Service::with('features')
            ->orderBy('order')
            ->get();

        $featuredServices = $services->where('is_featured', true);

        return view('service.index', [
            'title' => 'Nos Services | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-brand-dark text-white',
            'services' => $services,
            'featuredServices' => $featuredServices
        ]);
    }

    /**
     * Affiche les détails d'un service spécifique
     *
     * @param Service $service Le service (résolution automatique par le slug)
     * @return \Illuminate\View\View
     */
    public function show(Service $service)
    {
        // Charger les caractéristiques du service
        $service->load('features');

        // Récupérer les services liés (3 services aléatoires différents du service actuel)
        $relatedServices = Service::where('id', '!=', $service->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('service.show', [
            'title' => $service->title . ' | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-brand-dark text-white',
            'service' => $service,
            'relatedServices' => $relatedServices
        ]);
    }

    /**
     * Affiche le formulaire de demande de devis
     *
     * @return \Illuminate\View\View
     */
    public function quote(Request $request)
    {
        // Récupérer le service sélectionné si présent dans l'URL
        $selectedService = null;
        if ($request->has('service')) {
            $selectedService = Service::where('slug', $request->service)->first();
        }

        // Récupérer tous les services pour le menu déroulant
        $services = Service::orderBy('title')->get();

        return view('service.quote', [
            'title' => 'Demande de Devis | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-brand-dark text-white',
            'services' => $services,
            'selectedService' => $selectedService
        ]);
    }

    /**
     * Traite la soumission du formulaire de demande de devis
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function submitQuote(Request $request)
    {
        // Valider les données du formulaire
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'required|string|max:255',
            'budget' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Créer une nouvelle demande de devis
        Quote::create($validated);

        return redirect()->route('service.quote.success')->with('success', 'Votre demande de devis a été envoyée avec succès !');
    }

    /**
     * Affiche la page de confirmation après soumission du devis
     *
     * @return \Illuminate\View\View
     */
    public function quoteSuccess()
    {
        return view('service.quote-success', [
            'title' => 'Demande Envoyée | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-brand-dark text-white'
        ]);
    }
}
