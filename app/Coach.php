<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public function coachType()
    {
        return $this->belongsTo(CoachType::class);
    }
}
