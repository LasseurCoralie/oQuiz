<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use App\Models\Tag;
use Illuminate\Http\Response;

class QuizController extends Controller
{
    /**
     * Quiz page
     *
     * @param int|string $id Quiz id
     */
    public function quiz($id)
    {
        // Je récupère les informations du quiz en fonction de l'id reçu en paramètre d'URL
        $quiz = Quizzes::find($id);

        // Si l'id ne correspond à aucun, je déclenche une erreur 404 (pas non trouvée)
        if (! isset($quiz)) {
            // abort(404);
            abort(Response::HTTP_NOT_FOUND);
        }

        $tagsName = $this->tag();

        /*
        // On aurait pu faire :
        $quiz = Quiz::findOrFail($id);
        */

        /*
        Plus besoin de ce code car j'utilise la relationship entre Quiz et AppUser
        // Je récupère les informations de l'auteur à partir de l'id de app_user stocké dans ma table quizzes
        $author = AppUser::find($quiz->app_users_id);
        */

        /*
        Plus besoin de récupérer manuellement les questions associées à mon quiz, elles sont associées directement à mon quiz grâce à la relation décrite dans le Model Quiz
        // Je récupère la liste des questions associées à mon quiz
        $questionList = Question
            ::where('quizzes_id', $id)
            ->get()
        ;
        // $questionList = Question::where('quizzes_id', $quiz->id);
        */


        // J'appelle la view quiz/quiz.php
        if (!isset($_SESSION['connectedUser'])){
            return view(
                'quiz',
                [
                    'tagsName' => $tagsName,
    
                    // J'envoie le quiz à la view
                    'quiz'   => $quiz,
                    /*
                    Plus besoin de ce code car relationship entre Quiz et AppUser
                    // J'envoie l'auteur à la view
                    'author' => $author,
                    */
                    /*
                    Plus besoin d'envoyer la liste des questions à la vue, elles sont disponibles directement dans $quiz
                    // J'envoie la liste des questions à la view
                    'questionList' => $questionList
                    */
                ]
            );
        } else {
            return view ('quizConnected',
                [
                    // J'envoie le quiz à la view
                    'quiz'   => $quiz,
                    'tagsName' => $tagsName,

                ]
            );
        }
        
    }
}
