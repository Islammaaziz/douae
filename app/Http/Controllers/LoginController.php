<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\Stagiaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $userType = $request->user_type;
    
        if ($userType === 'employe') {
            // Authentification pour les employés
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                if ($user) {
                    $request->session()->put('user', $user); // Stocker l'utilisateur dans la session
                    $userName = $user->first_name . ' ' . $user->last_name;
                    session(['userName' => $userName]); // Stocker le nom de l'utilisateur dans la session
                    
                    if ($user->is_responsable !== 0) {
                        return redirect()->route('homepage');
                    } else {
                        return redirect()->route('dashboard_per');
                    }
                }
            } else {
                return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
            }
        } elseif ($userType === 'stagiaire') {
            // Authentification pour les stagiaires
            $stagiaire = Stagiaire::where('email', $request->email)->first();
            if ($stagiaire && Hash::check($request->password, $stagiaire->password)) {
                $request->session()->put('user', $stagiaire); // Stocker l'utilisateur dans la session
                $userName = $stagiaire->first_name . ' ' . $stagiaire->last_name;
                session(['userName' => $userName]); // Stocker le nom de l'utilisateur dans la session
                return redirect()->route('dashboard_stg');
            } else {
                return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
            }
        }
    
        return redirect()->back()->withErrors(['error' => 'Invalid user type']);
    }
    
    public function logout()
{
   Session::flush();
   Auth::logout();
   return redirect()->route('Rlogin')->with('success', 'Vous êtes bien déconnecté');
}
    
}
