<?php


namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Stagiaire;
use App\Models\Formation;
use App\Models\Conge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use PDF;


class EmployeController extends BaseController
{
    public function register(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'poste' => 'required|string', // Champ modifié pour correspondre au nom du champ dans le formulaire
            'Departement' => 'required|string', // Champ modifié pour correspondre au nom du champ dans le formulaire
            'phone' => 'required|string', // Champ modifié pour correspondre au nom du champ dans le formulaire
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Créer un nouvel employé avec les données du formulaire
        Employe::create([
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'poste' => $validatedData['Post'],
            'departement' => $validatedData['Departement'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Crypter le mot de passe
        ]);

        // Rediriger l'utilisateur après l'inscription
        return redirect()->route('Rlogin')->with('success', 'Registration successful!');
    }
   
    public function ajouterEmploye(Request $request)
    {
        // Validation des données
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:employes',
            'poste' => 'required',
            'phone' => 'required',
            'departement' => 'required',
            'password' => 'required|min:8',
        ]);

        // Création de l'employé
        $employe = new Employe();
        $employe->first_name = $request->input('first_name');
        $employe->last_name = $request->input('last_name');
        $employe->email = $request->input('email');
        $employe->poste = $request->input('poste');
        $employe->phone = $request->input('phone');
        $employe->departement = $request->input('departement');
        $employe->password = Hash::make($request->input('password'));

        // Sauvegarde de l'employé
        $employe->save();

        // Redirection avec message de succès
        return redirect()->route('employes_add')->with('success', 'Employee created successfully');
    }

        public function employes_show(Request $request)
    {
        if ($request->session()->has('user')) {
            $user = $request->session()->get('user');
        }
    $employes = Employe::all();
    return view('employes_show', compact('employes','user'));
    }


    public function show(Request $request,$id)
{
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');
    }
    $employe = Employe::findOrFail($id);
    return view('show_emp', compact('employe','user'));
}

public function edit(Request $request,$id)
{
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');
    }
    $employe = Employe::findOrFail($id);
    return view('edit_emp', compact('employe','user'));
}
public function update(Request $request, $id)
{
    // Validation des données
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'phone' => 'required|string|max:20',
        'poste' => 'required|string|max:255',
        'departement' => 'required|string|max:255',
        'date_d_embauche' => 'required|date',
    ]);

    // Trouver l'employé par ID
    $employe = Employe::findOrFail($id);

    // Mise à jour des informations de l'employé
    $employe->first_name = $validatedData['first_name'];
    $employe->last_name = $validatedData['last_name'];
    $employe->email = $validatedData['email'];
    $employe->phone = $validatedData['phone'];
    $employe->poste = $validatedData['poste'];
    $employe->departement = $validatedData['departement'];
    $employe->date_d_embauche = $validatedData['date_d_embauche'];

    // Sauvegarde de l'employé mis à jour
    $employe->save();

    // Recharger l'employé depuis la base de données pour obtenir les valeurs modifiées
    $employe = $employe->fresh();

    // Rediriger avec les valeurs modifiées
    return redirect()->route('edit_emp', $id)->with('success', 'Employé mis à jour avec succès')->with('updatedEmployee', $employe);
}    
public function compterEmploye(Request $request)
{


    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');
    }
    $conferenceRoomCapacity = 20;

    $employeeCount = Employe::getEmployeeCount();
    $stagiaireCount = Stagiaire::getStagiaireCount();
    $formationCount = Formation::getFormationCount();
    $demandeCongeCount = Conge::count();

    // Assuming you want to get all formations and calculate the percentage for each
    $formations = Formation::all();
    $formationsInscrites = [];

    foreach ($formations as $formation) {
        $numberOfUsers = $formation->users->count();
        $formationpourcentageInscription = ($numberOfUsers / $conferenceRoomCapacity) * 100;
        
        $formationsInscrites[] = [
            'formation' => $formation,
            'pourcentageInscription' => $formationpourcentageInscription
        ];
    }

    return view('homepage', compact('employeeCount', 'stagiaireCount', 'formationCount', 'formationsInscrites','demandeCongeCount','user'));
}

    public function delete($id)
{
    $employe = Employe::find($id);
    if ($employe) {
        // Code pour archiver ou supprimer l'employé
        $employe->delete(); // Supprime l'employé

        // Redirection avec un message de succès
        return redirect()->route('employes_show')->with('success', 'Employé supprimé avec succès.');
    } else {
        // Redirection avec un message d'erreur si l'employé n'est pas trouvé
        return redirect()->route('employes_show')->with('error', 'Employé non trouvé.');
    }
}
/************************************************************* */
public function showProfile(Request $request)
{
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');// Récupérer l'utilisateur authentifié

    // Rediriger vers la route 'profile' avec les données de l'utilisateur
    
    if ($user['role'] === 'employee') {
        return view('espace_per.show_per', compact('user'));
    } elseif ($user['role'] === 'stagiaire') {
        return view('espace_stg.show_stg', compact('user'));
    }
   
    }
}



  public function show_stageaires_add(Request $request){
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');
    }
       return  view('stageaires_add', compact('user'));
  }

public function show_respo(Request $request){
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user');
    }
       return  view('show_respo', compact('user'));
  }

public function ToEditProfile(Request $request)
{
    // Vérifier si l'utilisateur est authentifié
    if ($request->session()->has('user')) {
        $user = $request->session()->get('user'); // Récupérer l'utilisateur depuis la session

        if ($user['role'] === 'employee') {
            return view('espace_per.edit_per', compact('user'));
        } elseif ($user['role'] === 'stagiaire') {
            return view('espace_stg.edit_stg', compact('user'));
        }
    }

    // Rediriger vers la page de tableau de bord par défaut si l'utilisateur n'est pas authentifié
    return redirect()->route('dashboard_per')->with('error', 'Veuillez vous connecter pour accéder à cette page.');
}

public function updateProfile(Request $request)
{
    $user = $request->session()->get('user');
    $role = $user['role'];

    if ($role === 'stagiaire') {
        // C'est un stagiaire, trouver le stagiaire par ID
        $stagiaire = Stagiaire::findOrFail($request->id);

        // Mettre à jour les informations du stagiaire
        $stagiaire->first_name = $request->input('nom');
        $stagiaire->last_name = $request->input('prenom');
        $stagiaire->email = $request->input('email');
        $stagiaire->phone = $request->input('phone');
        $stagiaire->Tuteur = $request->input('Tuteur');
        $stagiaire->Mission = $request->input('Mission');
        $stagiaire->Duree_de_stage = $request->input('Duree_de_stage');

        // Sauvegarder les modifications
        $stagiaire->save();

        // Mettre à jour la session avec les nouvelles informations
        $request->session()->put('user', $stagiaire);

        return redirect()->route('edit_per', ['id' => $stagiaire->id])
            ->with('success', 'Profil mis à jour avec succès.');

    } else if ($role === 'employee') {
        $employe = Employe::findOrFail($request->id);
        $employe->first_name = $request->input('nom');
        $employe->last_name = $request->input('prenom');
        $employe->email = $request->input('email'); // Corrigé ici
        $employe->phone = $request->input('phone');
        $employe->poste = $request->input('poste');
        $employe->departement = $request->input('departement');
        $employe->Date_d_embauche = $request->input('Date_d_embauche');

        $employe->save();

        // Mettre à jour la session avec les nouvelles informations
        $request->session()->put('user', $employe);

        return redirect()->route('edit_per', ['id' => $employe->id])
            ->with('success', 'Profil mis à jour avec succès.');
    } else {
        // Si le rôle n'est pas reconnu
        return redirect()->back()->withErrors(['role' => 'Invalid user role']);
    }
}

public function genererRapport()
{
    // Récupérer les données nécessaires pour le rapport
    $employees = Employe::all();
    $stageaires = Stagiaire::all();

    // Calculer le pourcentage des employés et des stagiaires
    $totalEmployees = $employees->count();
    $totalStagiaires = $stageaires->count();

    $percentageEmployees = ($totalEmployees > 0) ? ($totalEmployees / ($totalEmployees + $totalStagiaires)) * 100 : 0;
    $percentageStagiaires = ($totalStagiaires > 0) ? ($totalStagiaires / ($totalEmployees + $totalStagiaires)) * 100 : 0;

    // Récupérer les données nécessaires pour le rapport
    $data = [
        'title' => 'Rapport de Personnels',
        'date' => date('m/d/Y'),
        'employees' => $employees,
        'stageaires' => $stageaires,
        'percentageEmployees' => $percentageEmployees,
        'percentageStagiaires' => $percentageStagiaires,
    ];

    // Charger la vue avec les données et générer le PDF
    $pdf = PDF::loadView('rapports.employe', $data);

    // Retourner le PDF pour le téléchargement
    return $pdf->download('rapport_employes.pdf');
}

}

