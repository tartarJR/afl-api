<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function primaryPosition()
    {
        return $this->belongsTo(Position::class);
    }

    public function secondaryPosition()
    {
        return $this->belongsTo(Position::class);
    }
}
