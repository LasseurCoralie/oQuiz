<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
  
  // on peut spécifier le nom de la table dans laquelle Eloquent doit aller chercher/insérer les infos.
  // Mais Eloquent est "intelligent", il retrouve ce nom en passant le nom de la classe en snake_case, au pluriel (cf la doc : https://laravel.com/docs/5.7/eloquent#eloquent-model-conventions)
  
  // protected $table = 'app_users';

  
  public function getFullName()
  {
    return $this->firstname.' '.$this->lastname;
  }
}