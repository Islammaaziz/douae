<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StagiaireController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\EmailController;
use App\Http\Middleware\IsResponsable;
use App\Http\Controllers\employeController;
use App\Http\Controllers\CongeController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;


//**********LOGIN****************** */
Route::get('/', function () {
    return view('login');
})->name('Rlogin');

Route::post('/login',[LoginController::class,'login'])->name('login');


//**********SIGNUP*********************************** */


Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/email/verify/{id}/{token}', [RegisterController::class, 'verifyEmail'])->name('verification.verify');

Route::get('/test-email', 'RegisterController@sendTestEmail');
Route::post('/test-email', [RegisterController::class, 'sendTestEmail'])->name('send-test-email');


Route::get('/signup_stg', function () {
    return view('signup_stg');
})->name('signup_stg');




Route::get('/show_actualite', [ActualiteController::class, 'show_actualite'])->name('show_actualite');


Route::post('/register_stg', [StagiaireController::class, 'register_stg'])->name('register_stg');

//***************SE DEPLACER NORMAL USER****************************** */

Route::get('/dashbord_per', [FormationController::class, 'compterFormation'])->name('dashboard_per');

Route::get('/dashbord_stg', [FormationController::class, 'compterFormationstg'])->name('dashboard_stg');




Route::get('/show_stg', function () {
    return view('espace_per.show_stg');
})->name('show_stg');

Route::get('/edit_per', function () {
    return view('espace_per.edit_per');
})->name('edit_per');

//Route::get('/formation_per', function () {
  //  return view('espace_per.formation_per');
//})->name('formation_per');



Route::get('/formation_per', [FormationController::class, 'showFormationper'])->name('formation_per');

Route::get('/formation_stg', [FormationController::class, 'showFormationstg'])->name('formation_stg');



Route::get('/formation_stg', [FormationController::class, 'showFormationstg'])->name('formation_stg');
Route::get('/formation/{id}/inscrire', [FormationController::class, 'inscrireStagiaire'])->name('inscription');



Route::post('/formation/{id}/inscrire', [FormationController::class, 'inscrireEmploye'])->name('formation_inscrire');


Route::get('/prochain_formation_per', [FormationController::class, 'showNewFormation'])->name('prochain_formation_per');

Route::get('/prochain_formation_stg', [FormationController::class, 'showNewFormationstg'])->name('prochain_formation_stg');






Route::get('/edit_per', [employeController::class, 'ToEditProfile'])->name('edit_per');
Route::post('/update_per/{id}', [employeController::class, 'updateProfile'])->name('update_per');

Route::get('/show_per', [employeController::class, 'showProfile'])->name('show_per');

//****************SE DEPLACER STAGEAIRE***************************** */



//Route::get('/dashboard_stg', function () {
  //  return view('espace_stg.dashbord_stg');
//})->name('dashboard_stg');

//****************LOGOUT***************************** */

Route::get('/logout',[logincontroller::class,'logout'])->name('logout');


//**************SE DEPLACER RESPO RH ******************************* */


Route::get('/homepage', [employeController::class, 'compterEmploye'])->name('homepage');


Route::get('/employes_add', function () {
    return view('employes_add');
})->name('employes_add');


Route::get('/employes_add', [employeController::class, 'show_employes_add'])->name('employes_add');





Route::get('/stageaires_add', [employeController::class, 'show_stageaires_add'])->name('stageaires_add');

Route::get('/show_respo', [employeController::class, 'show_respo'])->name('show_respo');



Route::get('/generer_rapport', [employeController::class, 'genererRapport'])->name('generer.rapport');

Route::get('/generer_rapport_conge', [employeController::class, 'genererRapportconge'])->name('generer.rapportConge');



Route::get('/formation', [FormationController::class, 'show'])->name('formation');


//Route::get('/formation_add', function () {
  //  return view('formation_add');
//})->name('formation_add');
Route::get('/formation_add', [FormationController::class, 'showformationadd'])->name('formation_add');




Route::get('/formations/{id}/utilisateurs', [FormationController::class, 'listeUtilisateurs'])->name('formations.listeUtilisateurs');

//*********************CRUD EMPLOYE************************ */

Route::get('/employes/count', [employeControleur::class, 'countEmployes']);
Route::post('/ajouterEmploye', [employeController::class,'ajouterEmploye'])->name('ajouterEmploye');

Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('show_emp');


Route::get('/employes_show', [employeController::class, 'employes_show'])->name('employes_show');

Route::get('/employes/{id}/edit', [EmployeController::class, 'edit'])->name('edit_emp');
Route::put('/employes/{id}', [EmployeController::class, 'update'])->name('update_emp');
Route::get('/employees/delete/{id}', [employeController::class,'delete'])->name('delete_emp');



Route::get('/conge_per', [CongeController::class,'afficher_conge_per'])->name('conge_per');



Route::post('store_conge', [CongeController::class,'store'])->name('store_conge');

Route::get('afficher_demande_conge', [CongeController::class,'show'])->name('show_conge');

Route::get('/conges/{id}/confirmer', [CongeController::class,'confirmerConge'])->name('conge_confirmer');

Route::get('/conges/{id}/rejeter', [CongeController::class,'rejeterConge'])->name('conge_rejeter');




//********************CRUD STAGIAIRE************************* */


Route::post('/ajouterStagiaire', [StagiaireController::class,'ajouterStagiaire'])->name('ajouterStagiaire');
Route::get('/stageaires_show', [StagiaireController::class, 'stageaires_show'])->name('stageaires_show');

Route::get('/stagiaire/{id}', [StagiaireController::class, 'show'])->name('show_stg');

Route::get('/stagiaire/{id}/edit', [StagiaireController::class, 'edit'])->name('edit_stg');
Route::put('/stagiaire/{id}', [StagiaireController::class, 'update'])->name('update_stg');

Route::get('/stagiaire/delete/{id}', [StagiaireController::class,'delete'])->name('delete_stg');


//********************CRUD FORMATION************************* */

Route::post('/Ajouterformations', [FormationController::class, 'store'])->name('formations.store');

Route::get('/formation_edit', function () {
    return view('formation_edit');
})->name('formation_edit');




Route::get('/formation/{id}/edit', [FormationController::class, 'edit'])->name('formation_edit');
Route::put('/formations/{id}', [FormationController::class, 'update'])->name('formations.update');

Route::get('/formation/delete/{id}', [FormationController::class,'delete'])->name('delete_formation');




Route::post('/ajouter_actualite', [ActualiteController::class, 'store'])->name('ajouter_actualite');




Route::get('/envoyerEmail', [EmailController::class, 'send'])->name('envoyerEmail');

