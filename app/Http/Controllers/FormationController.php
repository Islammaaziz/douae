<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\FormationUser;
use App\Models\Conge;
use App\Notifications\NewFormationNotification;
use Illuminate\Support\Facades\Auth; 

class FormationController extends BaseController
{
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'lieu' => 'required|string|max:255',
        ]);

       $formation = Formation::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'lieu' => $request->lieu,
        ]);

        return view('formation_add', compact('formation'));
    }


    public function showFormationAdd(Request $request)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }
        return view('formation_add',compact('user'));
    }

    public function show(Request $request)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }
        $formations = Formation::with('users')->get();
        $conferenceRoomCapacity = 35;
    
        // Calculer le pourcentage d'inscription pour chaque formation
        foreach ($formations as $formation) {
            $numberOfUsers = $formation->users->count();
            $formation->pourcentageInscription = ($numberOfUsers / $conferenceRoomCapacity) * 100;
        }
    
        return view('formation', compact('formations','user'));
    }

    public function showFormationper(Request $request)
    {
        // Récupérer l'utilisateur connecté
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }
    
        // Récupérer toutes les formations
        $formations = Formation::all();
    
        // Séparer les formations en deux listes : inscrites et non inscrites
        $formationsInscrites = [];
        $formationsNonInscrites = [];
    
        foreach ($formations as $formation) {
            if ($formation->users->contains($user)) {
                $formationsInscrites[] = $formation;
            } else {
                $formationsNonInscrites[] = $formation;
            }
        }
    
        // Rediriger en fonction des inscriptions
        if (!empty($formationsInscrites)) {
            return view('espace_per.formation_per', compact('formationsInscrites','user'));
        } else {
            return view('espace_per.prochain_formation_per', compact('formationsNonInscrites','user'));
        }
    }

    public function showFormationstg(Request $request)
    {
        // Récupérer l'utilisateur connecté
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
    
            // Récupérer les formations auxquelles l'utilisateur est inscrit
            $formationsInscrites = FormationUser::where('user_id', $user->id)->get();
            $formationsDetails = [];
            foreach ($formationsInscrites as $formationInscrite) {
                $formationsDetails[] = $formationInscrite->formation;
            }
    
    
            return view('espace_stg.formation_stg', compact('formationsDetails', 'user'));
        }
    }
        

        public function compterFormation(Request $request)
        {
            // Récupérer l'utilisateur connecté
            if ($request->session()->has('user')) {
                $user = $request->session()->get('user');
            
                // Récupérer toutes les formations
                $formations = Formation::all();
                $totalFormations = $formations->count();
            
                // Séparer les formations en inscrites et non inscrites
                $formationsInscrites = [];
                $formationsNonInscrites = [];
            
                foreach ($formations as $formation) {
                    if ($formation->users->contains($user->id)) {
                        $formationsInscrites[] = $formation;
                    } else {
                        $formationsNonInscrites[] = $formation;
                    }
                }
            
                // Compter les formations inscrites
                $nombreFormationsInscrites = count($formationsInscrites);
        
                // Calculer le pourcentage de formations inscrites
                $pourcentageFormationsInscrites = ($totalFormations > 0) ? ($nombreFormationsInscrites / $totalFormations) * 100 : 0;
        
                foreach ($formationsInscrites as $formation) {
                    $startDate = Carbon::parse($formation->date_debut);
                    $endDate = Carbon::parse($formation->date_fin);
                    $now = Carbon::now();
            
                    if ($now >= $endDate) {
                        $formation->pourcentageFinalisation = 100;
                    } elseif ($now <= $startDate) {
                        $formation->pourcentageFinalisation = 0;
                    } else {
                        $totalDuration = $endDate->diffInSeconds($startDate);
                        $elapsedDuration = $now->diffInSeconds($startDate);
                        $formation->pourcentageFinalisation = ($elapsedDuration / $totalDuration) * 100;
                    }
                }
            
                // Récupérer le dernier congé de l'utilisateur
                $MonConge = Conge::where('employee_id', $user->id)->latest()->first();
        
                return view('espace_per.dashbord_per', compact('formationsInscrites','nombreFormationsInscrites', 'pourcentageFormationsInscrites','totalFormations', 'MonConge','user'));
            }
        }
        

    public function compterFormationstg(Request $request)
    {
        // Récupérer l'utilisateur connecté
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        
            // Récupérer toutes les formations
            $formations = Formation::all();
            $totalFormations = $formations->count();
        
            // Séparer les formations en inscrites et non inscrites
            $formationsInscrites = [];
            $formationsNonInscrites = [];
        
            foreach ($formations as $formation) {
                if ($formation->users->contains($user->id)){
                    $formationsInscrites[] = $formation;
                } else {
                    $formationsNonInscrites[] = $formation;
                }
            }
        
            // Compter les formations inscrites
            $nombreFormationsInscrites = count($formationsInscrites);
    
            // Calculer le pourcentage de formations inscrites
            $pourcentageFormationsInscrites = ($totalFormations > 0) ? ($nombreFormationsInscrites / $totalFormations) * 100 : 0;
    
            // Trouver la formation en cours
            $formationEnCours = null;
            foreach ($formationsInscrites as $formation) {
                $startDate = Carbon::parse($formation->date_debut);
                $endDate = Carbon::parse($formation->date_fin);
                $now = Carbon::now();
        
                if ($now >= $endDate) {
                    $formation->pourcentageFinalisation = 100;
                } elseif ($now <= $startDate) {
                    $formation->pourcentageFinalisation = 0;
                } else {
                    $totalDuration = $endDate->diffInSeconds($startDate);
                    $elapsedDuration = $now->diffInSeconds($startDate);
                    $formation->pourcentageFinalisation = ($elapsedDuration / $totalDuration) * 100;
                    
                    // Si la formation est en cours, la stocker dans formationEnCours
                    if ($now > $startDate && $now < $endDate) {
                        $formationEnCours = $formation;
                    }
                }
            }
        
            return view('espace_stg.dashbord_stg', compact('formationsInscrites', 'nombreFormationsInscrites', 'pourcentageFormationsInscrites', 'totalFormations', 'formationEnCours','user'));
        }
    }






    public function showNewFormation(Request $request)
    {
        // Récupérer l'utilisateur connecté
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }
        // Récupérer toutes les formations
        $formations = Formation::all();
    
        // Séparer les formations en deux listes : inscrites et non inscrites
        $formationsInscrites = [];
        $formationsNonInscrites = [];
    
        foreach ($formations as $formation) {
            if ($formation->users->contains($user)) {
                $formationsInscrites[] = $formation;
            } else {
                $formationsNonInscrites[] = $formation;
            }
        }
            return view('espace_per.prochain_formation_per', compact('formationsNonInscrites','user'));
        
    }


    public function showNewFormationstg(Request $request)
    {
        // Récupérer l'utilisateur connecté
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
    
            // Récupérer les formations auxquelles l'utilisateur est inscrit
            $formationsInscrites = FormationUser::where('user_id', $user->id)->get();
    
            // Récupérer toutes les formations non inscrites
            $formationsNonInscrites = Formation::whereNotIn('id', $formationsInscrites->pluck('formation_id'))->get();
    
            return view('espace_stg.prochain_formation_stg', compact('formationsNonInscrites', 'user'));
        }
    }

    

    public function edit(Request $request,$id)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }
        $formation = Formation::findOrFail($id);
        return view('formation_edit', compact('formation','user'));
    } 

    
    public function inscrireEmploye(Request $request,$id)
    {
        // Récupérer la formation par son ID
        $formation = Formation::findOrFail($id);
    
        // Récupérer l'utilisateur actuellement authentifié
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
            $alreadyEnrolled = $formation->users()->where('user_id', $user->id)->exists();

            if ($alreadyEnrolled) {
                // Rediriger avec un message d'erreur si l'utilisateur est déjà inscrit
                return redirect()->back()->with('error', 'Vous êtes déjà inscrit à cette formation.');
            }
       
        
            // Vérifier si le titre de la formation est défini
            if (!is_null($formation->titre)) {
                // Ajouter l'utilisateur à la formation avec le titre spécifié
                $formation->users()->attach($user->id, [
                    'nom' => $user->first_name,
                    'prenom' => $user->last_name,
                    'role' => $user->role,// ou 'intern' selon votre logique
                    'title' => $formation->titre,
                ]);
    
                // Rediriger avec un message de succès
                if ($role == 'employee') {
                    return redirect()->route('formation_per')->with('error', $message);
                } elseif ($role == 'stagiaire') {
                    return redirect()->route('formation_stg')->with('error', $message);
                }
        
    
        // Rediriger avec un message d'erreur si déjà inscrit
        return back()->with('error', 'Impossible de s\'inscrire à la formation. Le titre est manquant.');
    }
}
}


    public function inscrireStagiaire(Request $request,$id)
    {
        // Récupérer la formation par son ID
        $formation = Formation::findOrFail($id);

     if ($request->session()->has('user')) {
            $user = $request->session()->get('user');


            $alreadyEnrolled = $formation->users()->where('user_id', $user->id)->exists();

            if ($alreadyEnrolled) {
                // Rediriger avec un message d'erreur si l'utilisateur est déjà inscrit
                return redirect()->back()->with('error', 'Vous êtes déjà inscrit à cette formation.');
            }

        // Récupérer l'utilisateur actuellement authentifié
        if (!is_null($formation->titre)) {
            // Ajouter l'utilisateur à la formation avec le titre spécifié
            $formation->users()->attach($user->id, [
                'nom' => $user->first_name,
                'prenom' => $user->last_name,
                'role' => $user->role,// ou 'intern' selon votre logique
                'title' => $formation->titre,
            ]);
        
        
    }
    $request->session()->put('user', $user->fresh());
    return redirect()->route('prochain_formation_stg');
}
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'date_debut' => 'required|date',
        'date_fin' => 'required|date',
        'lieu' => 'required|string|max:255',
    ]);

    $formation = Formation::findOrFail($id);
    $formation->update([
        'titre' => $request->titre,
        'description' => $request->description,
        'date_debut' => $request->date_debut,
        'date_fin' => $request->date_fin,
        'lieu' => $request->lieu,
    ]);

    return redirect()->route('formation')->with('success', 'Formation mise à jour avec succès');
}


public function delete($id)
{
    $formation = Formation::find($id);
    if ($formation) {
        // Code pour archiver ou supprimer l'employé
        $formation->delete(); // Supprime l'employé

        // Redirection avec un message de succès
        return redirect()->route('formation')->with('success', 'Formation supprimé avec succès.');
    } else {
        // Redirection avec un message d'erreur si l'employé n'est pas trouvé
        return redirect()->route('formation')->with('error', 'formation non trouvé.');
    }
}

public function listeUtilisateurs(Request $request,$id)
{
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');
    }
    // Récupérer la formation par son ID
    $formation = Formation::findOrFail($id);

    // Récupérer les utilisateurs inscrits à cette formation
    $utilisateurs = $formation->users()->get();

    // Retourner la vue avec la liste des utilisateurs
    return view('emp_inscrit_formation', compact('formation', 'utilisateurs','user'));
}




}
