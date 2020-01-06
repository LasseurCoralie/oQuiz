<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {

    public function signUp(Request $request)
    {
        return view('inscription', [

        ]); 
    }

    public function signIn(Request $request)
    {
        return view('connexion', [

        ]); 
    }
}