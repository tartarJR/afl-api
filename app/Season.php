<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function hasGames()
    {
        return count($this->games) > 0 ? true : false;
    }
}
