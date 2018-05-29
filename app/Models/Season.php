<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function hasGames()
    {
        return count($this->games) > 0 ? true : false;
    }
}
