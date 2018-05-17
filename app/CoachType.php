<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoachType extends Model
{
    public function coaches()
    {
        return $this->hasMany(Coach::class);
    }
}
