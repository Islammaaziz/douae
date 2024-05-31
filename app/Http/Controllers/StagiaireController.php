<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class StagiaireController extends BaseController
{
    public function showRegistrationForm()
    {
        return view('auth.register_intern');
    }

    public function register_stg(Request $request)
    {
        // Enregistrer le stagiaire
        $stagiaire = Stagiaire::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'Tuteur' => $request->Tuteur,
            'Duree_de_stage' => $request->Duree_de_stage,
            'Mission' => $request->Mission,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Envoi de l'e-mail de confirmation
       // Mail::to($stagiaire->email)->send(new RegistrationConfirmation());

        return redirect()->route('Rlogin')->with('success', 'Your account has been created successfully!');
    }

    public function ajouterStagiaire(Request $request)
    {
        // Validation des données
       

        // Création de l'employé
        $stagiaire = new Stagiaire();
        $stagiaire->first_name = $request->input('first_name');
        $stagiaire->last_name = $request->input('last_name');
        $stagiaire->email = $request->input('email');
        $stagiaire->Mission = $request->input('Mission');
        $stagiaire->Duree_de_stage = $request->input('Duree_de_stage');
        $stagiaire->phone = $request->input('phone');
        $stagiaire->Tuteur = $request->input('Tuteur');
        $stagiaire->password = Hash::make($request->input('password'));

        // Sauvegarde de l'employé
        $stagiaire->save();

        // Redirection avec message de succès
        return redirect()->route('stageaires_add')->with('success', 'Employee created successfully');
    }

    public function stageaires_show()
    {
    $stagiaires = Stagiaire::all();
    return view('stageaires_show', compact('stagiaires'));
    }

    public function show($id)
{
    $stagiaire = Stagiaire::findOrFail($id);
    return view('show_stg', compact('stagiaire'));
}

public function edit($id)
{
    $stagiaire = Stagiaire::findOrFail($id);
    return view('edit_stg', compact('stagiaire'));
}


public function update(Request $request, $id)
{
    // Validation des données
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|max:20',
        'Tuteur' => 'required|string|max:255',
        'Mission' => 'required|string|max:255',
        'Duree_de_stage' => 'required|string|max:255',
    ]);

    // Trouver l'employé par ID
    $stagiaire = Stagiaire::findOrFail($id);

    // Mise à jour des informations de l'employé
    $stagiaire->first_name = $validatedData['first_name'];
    $stagiaire->last_name = $validatedData['last_name'];
    $stagiaire->email = $validatedData['email'];
    $stagiaire->phone = $validatedData['phone'];
    $stagiaire->Tuteur = $validatedData['Tuteur'];
    $stagiaire->Mission = $validatedData['Mission'];
    $stagiaire->Duree_de_stage = $validatedData['Duree_de_stage'];

    // Sauvegarde de l'employé mis à jour
    $stagiaire->save();

    // Recharger l'employé depuis la base de données pour obtenir les valeurs modifiées
    $stagiaire = $stagiaire->fresh();

    // Rediriger avec les valeurs modifiées
    return redirect()->route('edit_stg', $id)->with('success', 'Stagiaire mis à jour avec succès')->with('updatedStagiaire', $stagiaire);
}    

public function delete($id)
{
    $stagiaire = Stagiaire::find($id);
    if ($stagiaire) {
        // Code pour archiver ou supprimer l'employé
        $stagiaire->delete(); // Supprime l'employé

        // Redirection avec un message de succès
        return redirect()->route('stageaires_show')->with('success', 'Employé supprimé avec succès.');
    } else {
        // Redirection avec un message d'erreur si l'employé n'est pas trouvé
        return redirect()->route('stageaires_show')->with('error', 'Employé non trouvé.');
    }
}


}
