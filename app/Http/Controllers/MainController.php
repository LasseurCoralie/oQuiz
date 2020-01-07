<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizzes;
use App\Models\AppUser;


class MainController extends Controller {

    public function homePage(Request $request)
    {
        $quizzes = Quizzes::all();

        // on récupère aussi les AppUsers, pour faire le lien entre Quizz et Auteur
        $users = AppUser::all();
        //dump($users);

        return view('home', [
          'quizzes' => $quizzes,
          'users' => $users
        ]);  
    }
}