<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showIncriptionPage(){
        return view('auth.login');
    }

    public function doLogin(Request $request) {
        // dd($request->input());

        // verifier si le login/indentifiant/email existe dejà dans notre table
        $getUser = User::where('email', $request->email)->first();

        if (!$getUser) {
            return "Identifiant ou mot de passe incorrect";
        } else {
            // verification d'un mauvais mot de passe
            $passwordHash = bcrypt($request->password);

            if($passwordHash !== $getUser->password) {
                return "Identifiant ou mot de passe incorrect";
            }

            // reactualisation de la session
            $request->session()->regenerate();

            return redirect()->to('/home');
        }
    }
    
}
