<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RefereeType extends Model
{
    public function referees()
    {
        return $this->belongsToMany(Referee::class, 'games_referees')->withPivot('game_id');
    }

    // this relationship is not necessary
    public function games()
    {
        return $this->belongsToMany(Game::class, 'games_referees');
    }
}
