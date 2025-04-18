<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Affiche la liste des témoignages
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->get();
        
        return view('admin.testimonials.index', compact('testimonials'));
    }
    
    /**
     * Affiche le formulaire de création d'un témoignage
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }
    
    /**
     * Enregistre un nouveau témoignage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'avatar' => 'nullable|string',
            'rating' => 'required|integer|min:1|max:5',
            'featured' => 'boolean',
            'order' => 'nullable|integer',
        ]);
        
        $data = $request->all();
        
        // Définir l'ordre par défaut si non fourni
        if (empty($data['order'])) {
            $data['order'] = Testimonial::max('order') + 1;
        }
        
        // Créer le témoignage
        Testimonial::create($data);
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage créé avec succès');
    }
    
    /**
     * Affiche le formulaire d'édition d'un témoignage
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\View\View
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }
    
    /**
     * Met à jour un témoignage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'avatar' => 'nullable|string',
            'rating' => 'required|integer|min:1|max:5',
            'featured' => 'boolean',
            'order' => 'nullable|integer',
        ]);
        
        // Mettre à jour le témoignage
        $testimonial->update($request->all());
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage mis à jour avec succès');
    }
    
    /**
     * Supprime un témoignage
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage supprimé avec succès');
    }
}
