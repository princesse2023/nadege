<?php

namespace App\Http\Controllers;

use session;
use App\Models\User;
use App\Models\Specialite;
use Illuminate\Support\Facades\Hash;
use App\Models\Classe;
use App\Models\Disponibilite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ConnexionController extends Controller
{


    public function form_login()
    {
        Auth::logout();
        return view('loginform');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function loge(){
        return view('connexion');
    }
   

    public function loginAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($credentials)) {
            // L'authentification a réussi on connecte l'utilisateur.
            $request->session()->regenerate();
            $role = Auth::user()->classe_id;
            // return Auth::user()->email;
            return redirect()->intended('/accueil'); // Rediriger vers la page daccueil
        } else {

            return 'pas connu';
        }

        // L'authentification a échoué

    }
    public function inscription (){
        return view('register');
    }

    public function formulaire (){
        return view('formulaire');
    }
    public function dispo (Request $request){
       $dispo= new Disponibilite ();
    //    $dispo->id_medecin=Auth::user()->id;
       $dispo->id_medecin=1;
    // $dispo->specia_id=Auth::user()->specialite_id;
       $dispo->specia_id=1;
       $dispo->date1=$request->date1;
       $dispo->date2=$request->date2;
      $dispo->save();
    }

    public function inscriptionrdvs(){
        $specialites = Specialite::all();
        return view('priserendevous',compact('specialites'));
    }

    public function inscriptionmedecin (){
        $specialites = Specialite::all();
        return view('registermedecin',compact('specialites'));
    }



    public function inscriptionAction(Request $request, User $user)
    { 
        $nomuser = $request->input('nom');
        $prenomuser = $request->input('prenom');
        $emailuser = $request->input('email');
        $telephoneuser = $request->input('telephone');
        $password = Hash::make('1234');
      
        $user->nom = $nomuser;
        $user->prenom = $prenomuser;
        $user->email = $emailuser;
        $user->telephone = $telephoneuser;
        $user->password = $password;

        $ok = $user->save();
        if (!$ok) {
            return back()->with('status', "Quelque chose c'est mal passé");
        }
        return 'ok';
        // return redirect('');
    }


    public function rendvAction(Request $request)
    {
        $resultats = Disponibilite::where('date1', '<', $dateDonnee)
        ->where('date2', '>', $request->dateDonnee)
        ->where('specia_id',$request->specialite)
        ->get();
       
       
        return view('User.medecindisponible'compact('resultats'));
        // return redirect('');
    }
}
