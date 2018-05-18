<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function coaches()
    {
        return $this->hasMany(Coach::class);
    }

    public function homeGames()
    {
        return $this->hasMany(Game::class, 'home_team_id');
    }

    public function awayGames()
    {
        return $this->hasMany(Game::class, 'away_team_id');
    }
}
