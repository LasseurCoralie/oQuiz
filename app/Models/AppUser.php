<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    
    protected $table = 'app_users';

    public function getFullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
