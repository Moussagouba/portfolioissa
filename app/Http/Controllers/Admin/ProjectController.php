<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Affiche la liste des projets
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $projects = Project::orderBy('order')->get();
        
        return view('admin.projects.index', compact('projects'));
    }
    
    /**
     * Affiche le formulaire de création d'un projet
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.projects.create');
    }
    
    /**
     * Enregistre un nouveau projet
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:projects',
            'description' => 'required|string',
            'client' => 'nullable|string|max:255',
            'date' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'gallery' => 'nullable|array',
            'featured' => 'boolean',
            'order' => 'nullable|integer',
        ]);
        
        $data = $request->all();
        
        // Générer un slug si non fourni
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        
        // Définir l'ordre par défaut si non fourni
        if (empty($data['order'])) {
            $data['order'] = Project::max('order') + 1;
        }
        
        // Gérer l'upload de l'image
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        
        // Créer le projet
        Project::create($data);
        
        return redirect()->route('admin.projects.index')->with('success', 'Projet créé avec succès');
    }
    
    /**
     * Affiche le formulaire d'édition d'un projet
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\View\View
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }
    
    /**
     * Met à jour un projet
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:projects,slug,' . $project->id,
            'description' => 'required|string',
            'client' => 'nullable|string|max:255',
            'date' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
            'gallery' => 'nullable|array',
            'featured' => 'boolean',
            'order' => 'nullable|integer',
        ]);
        
        $data = $request->all();
        
        // Générer un slug si non fourni
        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }
        
        // Gérer l'upload de la nouvelle image
        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($project->image && \Storage::disk('public')->exists($project->image)) {
                \Storage::disk('public')->delete($project->image);
            }
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        
        // Mettre à jour le projet
        $project->update($data);
        
        return redirect()->route('admin.projects.index')->with('success', 'Projet mis à jour avec succès');
    }
    
    /**
     * Supprime un projet
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Project $project)
    {
        // Supprimer l'image associée si elle existe
        if ($project->image && \Storage::disk('public')->exists($project->image)) {
            \Storage::disk('public')->delete($project->image);
        }
        
        $project->delete();
        
        return redirect()->route('admin.projects.index')->with('success', 'Projet supprimé avec succès');
    }
}
