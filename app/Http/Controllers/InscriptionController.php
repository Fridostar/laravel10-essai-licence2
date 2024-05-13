<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InscriptionController extends Controller
{
    public function showIncriptionPage() {
        return view('welcome');
    }

    public function doInscription(Request $request) {
        // dd($request->input());
        
        // transformer/crypter le mot de passe
        $passwordHash = bcrypt($request->password);
        // dd($password);

        // verifier si l'email est disponible
        $email = $request->email;
        $userTest = User::where('email', $email)->first();
        if ($userTest) {
            return "Email deja utiliser";
        } 

        // creer ou enregister l'utilisateur

        $newUser = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'phone_number' => $request->phoneNumber,
            'email' => $request->email,
            'password' => $passwordHash,
        ]);

        // rediriger sur une autre passe et afficher les info enregister
        // return view('profile')->with("userInfo", $newUser);
        return redirect()->to('/profile');
    }
}
