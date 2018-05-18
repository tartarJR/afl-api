<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    public function refereeTypes()
    {
        return $this->belongsToMany(RefereeType::class, 'games_referees')->withPivot('game_id');
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'games_referees')->withPivot('game_id', 'referee_type_id');
    }
}
