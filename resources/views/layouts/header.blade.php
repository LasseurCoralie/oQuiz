<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">

        <!-- Reset CSS -->
        <link href="../resources/views/css/reset.css"  rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Really beautiful CSS -->
        <link href="../resources/views/css/style.css"  rel="stylesheet">

        <title>O'Quiz</title>
    </head>
    <body>
        <main class="container">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                        <h1>O'Quiz</h1>
                        </a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <a href="{{route('home')}}">
                            <i></i>
                            Accueil
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Mon compte
                        </a>
                    </li>

                    <li>
                        <a href="{{route('inscription')}}">
                            <i></i>
                            S'inscrire
                        </a>
                    </li>

                    <li>
                        <a href="{{route('connexion')}}">
                            <i></i>
                            Se connecter
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i></i>
                            Déconnexion
                        </a>
                    </li>

                </ul>
            </nav>