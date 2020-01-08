<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    public function quizzes()
    {
        return $this->belongsToMany(
            'App\Models\Quizzes',
            'quizzes_has_tags',
            'tags_id',
            'quizzes_id'
        );
    }
}
