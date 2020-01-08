<?php

namespace App\Http\Controllers;

use App\Models\AppUser;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdminController extends Controller {

    public function signUp(Request $request)
    {
        
        return view('inscription', [

        ]); 
    }

    public function signUpPost(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $firstName = $request->input('firstname');
        $lastName = $request->input('lastname');
        
        try {
            $this->validate($request, [
                'email' => 'required', //|exists:app_users,email
                'password' => 'required',
                'firstname' => 'required',
                'lastname' => 'required'
            ]);

            $newUser = new AppUser();
        
            $newUser->email = $email;
            $newUser->password = $password;
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
}