<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AccountMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],

        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with(
            'error',
            'email et/ou mot de passe incorrect',
        )->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();


        return redirect()->route('login');
    }
    public function signupForm()
    {

        return view('pages.auth.register');
    }

    public function signup(Request $request)
    {
        $data = $request->all();

        
 

        $data['password'] = bcrypt($data['password']);
        $data['role_id'] = 2;


        $created = User::create($data);

        $contenu = [
            'title' => ' WEB APP OCA',
            'body' => 'votre compte est cree avec succes. Votre mot de pase est :' . $data['password']
        ];

        //Mail::to($data['email'])->send(new AccountMail($contenu));

        return redirect()->route('login')->with('success', 'Utilisateur enregistrer avec succes!');

        if ($created) {

            return redirect()->route('login')->with(
                'success',
                'Inscription reussie, voulez allez recevoir un mail contenant votre mot de passe '
            );
        }
        return back()->with(
            'error',
            'une erreur est survenue,veuillez concacter le support'
        );
    }
}
