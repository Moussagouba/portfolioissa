<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Récupérer les services mis en avant
        $featuredServices = Service::where('is_featured', true)
            ->orderBy('order')
            ->limit(5)
            ->get();
            
        // Récupérer tous les services pour la section des services
        $services = Service::orderBy('order')->get();
        
        return view('home', [
            'title' => 'Issa Cissé - Graphiste & Designer',
            'bodyClass' => 'bg-darkBg text-white',
            'featuredServices' => $featuredServices,
            'services' => $services
        ]);
    }
}
