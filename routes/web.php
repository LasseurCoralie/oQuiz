<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', [
    'as' => 'home',
    'uses' => 'MainController@homePage'
]);

$router->get('/signup', [
    'as' => 'inscription',
    'uses' => 'AdminController@signUp'
]);

$router->post('/signup', [
    'as' => 'inscription',
    'uses' => 'AdminController@signupPost'
]);

$router->get('/signin', [
    'as' => 'connexion',
    'uses' => 'AdminController@signIn'
]);

$router->post('/signin', [
    'as' => 'connexion',
    'uses' => 'AdminController@signinPost'
]);

$router->get('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quiz'
]);

$router->post('/quiz/{id}', [
    'as' => 'quiz',
    'uses' => 'QuizController@quizPost'
]);

$router->get('/logout', [
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);

$router->get('/account', [
    'as' => 'logout',
    'uses' => 'UserController@profile'
]);

$router->get('/tags', [
    'as' => 'tag',
    'uses' => 'TagController@tags'
]);
$router->get('/tags/{id}/quiz', [
    'as' => 'tagQuiz',
    'uses' => 'TagController@quiz'
]);
