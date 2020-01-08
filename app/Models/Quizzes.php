<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{

    protected $table = 'quizzes';
    /**
     * Create relationship between Quiz and his Questions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany Relationship configuration
     */
    public function questions()
    {
        return $this->hasMany(
            'App\Models\Question',
            'quizzes_id' // Clé étrangère dans la table question
        );
    }

    /**
     * Create relationship between Quiz and his AppUser (author)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo(
            'App\Models\AppUser',
            'app_users_id'
        );
    }

    /**
     * Create relationship between Quiz and Tags (Many to many)
     */
    public function tags()
    {
        return $this->belongsToMany(
            'App\Models\Tag',
            'quizzes_has_tags',
            'quizzes_id',
            'tags_id'
        );
    }
}
