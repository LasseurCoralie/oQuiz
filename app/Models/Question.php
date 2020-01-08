<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * Create relationship between Question and Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function level()
    {
        return $this->belongsTo(
            'App\Models\Level',
            'levels_id'
        );
    }

    public function answer()
    {
        return $this->hasMany(
            'App\Models\Answer',
            'questions_id'
        );
    }
}
