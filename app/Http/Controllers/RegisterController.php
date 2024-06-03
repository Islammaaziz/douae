<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('photos', 'public');
        } else {
            $path = null;
        }
       
        $employe = Employe::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'poste' => $request->poste,
            'phone' => $request->phone,
            'departement' => $request->departement,
            'date_d_embauche' => now(),
            'photo' => $path ,
        ]);

        // Envoi de l'e-mail de confirmation
       // Mail::to($employe->email)->send(new RegistrationConfirmation());

        // Redirection vers une page de confirmation ou de connexion
        return redirect()->route('Rlogin')->with('success', 'Votre compte a été créé avec succès !');
    }
}
