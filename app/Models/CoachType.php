<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoachType extends Model
{
    public function coaches()
    {
        return $this->hasMany(Coach::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
