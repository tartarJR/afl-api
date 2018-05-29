<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public function coachType()
    {
        return $this->belongsTo(CoachType::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
