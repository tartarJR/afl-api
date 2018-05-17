<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function coachTypes()
    {
        return $this->hasMany(CoachType::class);
    }
}
