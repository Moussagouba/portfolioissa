<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Affiche la liste des compétences
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $skills = Skill::orderBy('category')->orderBy('order')->get();
        
        return view('admin.skills.index', compact('skills'));
    }
    
    /**
     * Affiche le formulaire de création d'une compétence
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.skills.create');
    }
    
    /**
     * Enregistre une nouvelle compétence
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'percentage' => 'required|integer|min:0|max:100',
            'icon' => 'nullable|string',
            'category' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);
        
        $data = $request->all();
        
        // Définir l'ordre par défaut si non fourni
        if (empty($data['order'])) {
            $data['order'] = Skill::where('category', $data['category'])->max('order') + 1;
        }
        
        // Créer la compétence
        Skill::create($data);
        
        return redirect()->route('admin.skills.index')->with('success', 'Compétence créée avec succès');
    }
    
    /**
     * Affiche le formulaire d'édition d'une compétence
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\View\View
     */
    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }
    
    /**
     * Met à jour une compétence
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'percentage' => 'required|integer|min:0|max:100',
            'icon' => 'nullable|string',
            'category' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);
        
        // Mettre à jour la compétence
        $skill->update($request->all());
        
        return redirect()->route('admin.skills.index')->with('success', 'Compétence mise à jour avec succès');
    }
    
    /**
     * Supprime une compétence
     *
     * @param  \App\Models\Skill  $skill
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        
        return redirect()->route('admin.skills.index')->with('success', 'Compétence supprimée avec succès');
    }
}
