<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
