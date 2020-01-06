<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quizzes;

class MainController extends Controller {

    public function homePage(Request $request)
    {
        $quizzes = Quizzes::all();

        return view('home', [
          'quizzes' => $quizzes
        ]);  
    }
}