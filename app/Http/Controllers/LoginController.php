<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller
{
  public function login(Request $request)
  {
      $credentials = $request->only('email', 'password');
  
      if (Auth::attempt($credentials)) {
          // Authentification réussie
          if (Auth::user()->IsResponsable) {
              return redirect()->route('homepage');
          } else {
              return redirect()->route('dashboard_per');
          }
      }
  
      // Échec de l'authentification
      return back()->withErrors([
          'email' => 'Les informations d\'identification fournies sont incorrectes.',
      ])->withInput($request->only('email'));
  }
  
    
    public function logout()
{
   Session::flush();
   Auth::logout();
   return redirect()->route('Rlogin')->with('success', 'Vous êtes bien déconnecté');
}
    
}
