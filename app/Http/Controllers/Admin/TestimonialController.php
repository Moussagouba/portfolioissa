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
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
            'rating' => 'required|integer|min:1|max:5',
            'featured' => 'boolean',
            'order' => 'nullable|integer',
        ]);
        
        $data = $request->all();
        
        // Définir l'ordre par défaut si non fourni
        if (empty($data['order'])) {
            $data['order'] = Testimonial::max('order') + 1;
        }
        
        // Gérer l'upload de l'avatar
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('testimonials', 'public');
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
            'position' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'content' => 'required|string',
            'avatar' => 'nullable|image|mimes:jpeg,jpg,png|max:1024',
            'rating' => 'required|integer|min:1|max:5',
            'featured' => 'boolean',
            'order' => 'nullable|integer',
        ]);
        
        // Gérer l'upload du nouvel avatar
        if ($request->hasFile('avatar')) {
            // Supprimer l'ancien avatar si il existe
            if ($testimonial->avatar && \Storage::disk('public')->exists($testimonial->avatar)) {
                \Storage::disk('public')->delete($testimonial->avatar);
            }
            $data = $request->all();
            $data['avatar'] = $request->file('avatar')->store('testimonials', 'public');
            $testimonial->update($data);
        } else {
            // Mettre à jour sans changer l'avatar
            $testimonial->update($request->all());
        }
        
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
        // Supprimer l'avatar associé si il existe
        if ($testimonial->avatar && \Storage::disk('public')->exists($testimonial->avatar)) {
            \Storage::disk('public')->delete($testimonial->avatar);
        }
        
        $testimonial->delete();
        
        return redirect()->route('admin.testimonials.index')->with('success', 'Témoignage supprimé avec succès');
    }
}
