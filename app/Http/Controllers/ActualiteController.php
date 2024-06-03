<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Actualite;


class ActualiteController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            
        ]);

        // Création de l'actualité
        $actualite = Actualite::create([
            'titre' => $request->titre,
            'contenu' => $request->contenu,
            'date_de_publication' => Carbon::now(),
        ]);

        // Redirection avec un message de succès
        return redirect()->route('show_actualite')->with('success', 'Actualité ajoutée avec succès.');
    }
    public function show_actualite(Request $request){
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }

return view('actualites',compact('user'));
    }
}
