<?php

namespace App\Http\Controllers;
use App\Models\Conge;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CongeController extends BaseController
{
    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'comment' => 'nullable|string',
        ]);

        // Création d'une nouvelle demande de congé avec les données validées
        
        $employee = auth()->user();

        // Création d'une nouvelle demande de congé avec les données validées
        $conge = new Conge();
        $conge->employee_id = $employee->id; // Supposons que l'employé est connecté et que son ID est nécessaire
        $conge->first_name = $employee->first_name; // Récupérer le prénom de l'utilisateur connecté
        $conge->laste_name = $employee->last_name;  // Récupérer le nom de l'utilisateur connecté
        $conge->start_date = $validatedData['start_date'];
        $conge->end_date = $validatedData['end_date'];
        $conge->comment = $validatedData['comment'];

        // Sauvegarde de la demande de congé
        $conge->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Demande de congé ajoutée avec succès.');
    }
    public function show()
    {
        $demandesConge = Conge::where('status', 'pending')->get(); // Supposons que votre modèle s'appelle Conge
        return view('conge', ['demandesConge' => $demandesConge]);
    }
    
    public function confirmerConge($id)
    {
        $conge = Conge::findOrFail($id);
    
        // Calculer le nombre de jours entre la date de début et la date de fin
        $dateDebut = Carbon::parse($conge->start_date);
        $dateFin = Carbon::parse($conge->end_date);
        
        // Adding 1 to include both start and end dates in the count
        $joursDemandes = $dateDebut->diffInDays($dateFin) ;
    
        // Récupérer le solde annuel de congé de l'employé
        $employe = $conge->employe;
        $soldeCongeAnnuel = $conge->annual_conge_days;
    
        // Vérifier si le solde de congé de l'employé est suffisant
        if ($joursDemandes <= $soldeCongeAnnuel) {
            // Mettre à jour le statut de la demande de congé à "confirmé"
            $conge->update([
                'status' => 'confirmé',
            ]);
    
            // Déduire les jours de congé du solde annuel de l'employé
            $conge->annual_conge_days -= $joursDemandes;
            $conge->save();
    
            return redirect()->route('show_conge')->with('success', 'Demande de congé confirmée avec succès.');
        } else {
            // Rejeter la demande de congé si le solde de congé de l'employé est insuffisant
            $conge->update([
                'status' => 'rejeté',
            ]);
    
            return redirect()->route('show_conge')->with('error', 'Solde de congé insuffisant pour cette demande.');
        }
    }

    public function rejeterConge($id)
{
    $conge = Conge::findOrFail($id);

    // Mettre à jour le statut de la demande de congé à "rejeté"
    $conge->update([
        'status' => 'rejeté',
    ]);

    return redirect()->route('show_conge')->with('success', 'Demande de congé rejetée avec succès.');
}

}
