<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

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

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function reports()
    {
        return $this->belongsToMany(Report::class, 'teams_reports');
    }

    public function hasPlayers()
    {
        return count($this->players) > 0 ? true : false;
    }

    public function hasCoaches()
    {
        return count($this->coaches) > 0 ? true : false;
    }
}
