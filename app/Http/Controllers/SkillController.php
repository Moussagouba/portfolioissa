<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Affiche la page des compétences (skills)
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Récupérer les services pour afficher les compétences
        $services = Service::orderBy('order')->get();
        
        // Regrouper les services par catégorie pour les afficher dans différentes sections
        $designServices = $services->filter(function($service) {
            return in_array($service->slug, ['graphic-design', 'ui-ux-design']);
        });
        
        $developmentServices = $services->filter(function($service) {
            return in_array($service->slug, ['web-design', 'mobile-design']);
        });
        
        $marketingServices = $services->filter(function($service) {
            return in_array($service->slug, ['branding', 'print-design']);
        });
        
        return view('skill.index', [
            'title' => 'Mes Compétences | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-darkBg text-white',
            'services' => $services,
            'designServices' => $designServices,
            'developmentServices' => $developmentServices,
            'marketingServices' => $marketingServices
        ]);
    }
}
