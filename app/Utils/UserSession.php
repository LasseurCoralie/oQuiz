<?php

namespace App\Utils;

use App\Models\AppUser;

abstract class UserSession {

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     * 
     * @param \App\Models\AppUser $user
     */
    public static function connect(AppUser $user) 
    {
        $_SESSION[self::SESSION_INDEX_NAME] = $user;
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect() 
    {
        unset($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     * 
     * @return bool
     */
    public static function isConnected() : bool 
    {
        
        if (isset($_SESSION[self::SESSION_INDEX_NAME])) {
            return true;
        } else {
            return false;
        }
        

        return isset($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     * 
     * @return \App\Models\AppUser
     */
    public static function getUser() : AppUser 
    {
        return $_SESSION[self::SESSION_INDEX_NAME];
    }

    /**
     * Méthode permettant de savoir si l'utilisateur connecté est admin
     * 
     * @return bool
     */
    public static function isAdmin() : bool 
    {
        
    }
}