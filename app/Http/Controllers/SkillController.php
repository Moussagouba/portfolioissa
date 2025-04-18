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

        $printServices = $services->filter(function($service) {
            return in_array($service->slug, ['print-design']);
        });

        $brandingServices = $services->filter(function($service) {
            return in_array($service->slug, ['branding']);
        });

        return view('skill.index', [
            'title' => 'Mes Compétences | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-darkBg text-white',
            'services' => $services,
            'designServices' => $designServices,
            'printServices' => $printServices,
            'brandingServices' => $brandingServices
        ]);
    }
}
