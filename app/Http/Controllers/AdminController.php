<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use App\Utils\UserSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller {

    public function signUp(Request $request)
    {
        
        return view('inscription', [

        ]); 
    }

    public function signUpPost(Request $request)
    {
       
        try {
            $this->validate($request, [
                'email' => 'required|email|unique:app_users,email', //|exists:app_users,email
                'password' => 'required|confirmed|min:6',
                'firstname' => 'required|max:64',
                'lastname' => 'required|max:64'
            ]);

            $email = $request->input('email');
            $password = $request->input('password');
            $firstName = $request->input('firstname');
            $lastName = $request->input('lastname');

            // je chiffre le mot de passe avant de l'envoyer en bdd
            $hashedPassword = Hash::make($password);

            $newUser = new AppUser();
        
            $newUser->email = $email;
            $newUser->password = $hashedPassword;
            $newUser->firstName = $firstName;
            $newUser->lastName = $lastName;


            $newUser->save();

            return redirect()->route('home');

        }catch(ValidationException $exception){

            $errorsList = $exception->validator->getMessageBag()->getMessages();

            return view('inscription', [
                'errors' => $errorsList,
            ]);
        }
        
    }

    public function signIn(Request $request)
    {
        return view('connexion', [

        ]); 
    }

    public function signinPost(Request $request)
    {
        try{
            $this->validate(
                $request,
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ]
            );

            $email = $request->input('email');

            $user = AppUser::where('email', $email)->first();

            if(isset($user)){
                $password = $request->input('password');

                $isValidPassword = Hash::check($password, $user->password);

                if($isValidPassword)
                {
                    UserSession::connect($user);
                    return redirect()->route('home');
                }else {
                    // Erreur : password invalid
                        // Afficher la vue du formulaire avec message d'erreur
                        echo '1er else';
                        dump($password);
                        // Ou lancer une exception à capturer
                }
            } else {
                // Erreur : user non trouvé
                echo '2e else';
                dump($user);
                    // Afficher la vue du formulaire avec message d'erreur
                    // Ou lancer une exception à capturer
            }   

            $password = $request->input('password');

        }catch(ValidationException $exception){
            dump($exception);
        }
    }

    public function logout ()
    {
        UserSession::disconnect();
        return redirect()->route('home');
    }

    public function profile()
    {
        if(UserSession::isConnected())
        {
            return view('admin', [

                ]);
        } else {
             echo 'gtfo';
        }
        
    }
}