<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function showIncriptionPage() {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        // crypter  le mot de passe du user
        $passwordHash = bcrypt($request->password);
        // vérifier l'email du user

        $email = $request->email;
        $verif_email = User::where('email', $email)->first();

        if ($verif_email) {
            return "Email déjà existant";
        }
        
        // créer ou enregistrer le user
        User::create([
            'first_Name' => $request->firstName,
            'last_Name' => $request->lastName,
            'telephone' => $request->phoneNumber,
            'email' => $request->email,
            'password' => $passwordHash,
        ]);

        return view('welcome')->with('message', "Votre compte à bien été créer");
    }

    public function doSomething() {
        // 
    }
}
