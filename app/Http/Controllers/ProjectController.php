<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Affiche la galerie de projets publique
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::orderBy('featured', 'desc')
            ->orderBy('order')
            ->get();

        $featuredProjects = $projects->where('featured', true);

        return view('portfolio.index', [
            'title' => 'Portfolio | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-darkBg text-white',
            'projects' => $projects,
            'featuredProjects' => $featuredProjects
        ]);
    }

    /**
     * Affiche les détails d'un projet
     *
     * @param Project $project
     * @return \Illuminate\View\View
     */
    public function show(Project $project)
    {
        // Récupérer des projets similaires
        $relatedProjects = Project::where('id', '!=', $project->id)
            ->where('category', $project->category)
            ->limit(3)
            ->get();

        return view('portfolio.show', [
            'title' => $project->title . ' | Portfolio | Issa Cissé',
            'bodyClass' => 'bg-darkBg text-white',
            'project' => $project,
            'relatedProjects' => $relatedProjects
        ]);
    }
}
