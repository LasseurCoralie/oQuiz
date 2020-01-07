<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use App\Models\Question;
use App\Models\Level;
use App\Models\AppUser;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class QuizController extends Controller
{
    public function quiz(Request $request, $id)
    {
        $users = AppUser::all();

        $quiz = Quizzes::all()->where('id', $id);

        $levels = Level::all();

        $questions = Question::all()->where('quizzes_id', $id);

        dump($questions);

        return view('quiz', [
            'questions' => $questions,
            'levels' => $levels,
            'quiz' => $quiz,
            'users' => $users

        ]);
    }
    
}