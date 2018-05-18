<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class);
    }
}
