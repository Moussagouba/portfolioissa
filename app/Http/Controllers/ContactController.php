<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Affiche le formulaire de contact
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('contact.index', [
            'title' => 'Contact | Issa Cissé - Graphiste',
            'bodyClass' => 'bg-darkBg text-white'
        ]);
    }

    /**
     * Traite l'envoi du message de contact
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Pour l'instant, on stocke juste dans la session
        // Plus tard, vous pourrez envoyer un email
        
        return redirect()->route('contact.index')
            ->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons dans les plus brefs délais.');
    }
}
