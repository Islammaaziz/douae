<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
use Illuminate\Support\Facades\Hash;
use App\Mail\RegistrationConfirmation;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

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
            'verification_token' => Str::random(60),
        ]);

       
    
        return redirect()->route('Rlogin')->with('success', 'Votre e-mail a été vérifié avec succès !');
    }
}
      
        // Redirection vers une page de confirmation ou de connexion
    


 //   public function verifyEmail($id, $token)
   // {
        // Vérifier si les paramètres sont null
     //   if ($id === null || $token === null) {
       //     return redirect()->route('Rlogin')->with('error', 'Paramètres manquants pour la vérification de l\'e-mail.');
        //}
    
        // Recherche de l'employé avec l'ID et le token fournis
    //    $employe = Employe::where('id', $id)->where('verification_token', $token)->firstOrFail();
    
        // Mettre à jour l'employé si trouvé
      //  $employe->update([
          //  'email_verified_at' => now(),
          //  'verification_token' => null,
       // ]);
    
        // Redirection avec message de succès
      //  return redirect()->route('Rlogin')->with('success', 'Votre e-mail a été vérifié avec succès !');
   // }



  //  public function sendTestEmail(Request $request)
  //  {
      //  $user = User::create([
          //  'name' => $request->name,
          //  'email' => $request->email,
          //  'password' => bcrypt($request->password),
      //  ]);

        // Vérifier si l'utilisateur est authentifié
      //  try {
        //    $user->sendEmailVerificationNotification();
         //   return 'E-mail de vérification envoyé avec succès à ' . $user->email;
     //   } catch (\Exception $e) {
      //      return "Erreur lors de l\'envoi de l\'e-mail de vérification : " . $e->getMessage();
       // }
 //   }

//}
