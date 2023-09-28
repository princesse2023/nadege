<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view ('User/accueil');
    }
    public function MD(){
        return view ('User/medecindisponible');
    }
}
