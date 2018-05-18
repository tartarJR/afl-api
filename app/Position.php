<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function primaryPositionPlayers()
    {
        return $this->hasMany(Player::class, 'primary_position_id');
    }

    public function secondaryPositionPlayers()
    {
        return $this->hasMany(Player::class, 'secondary_position_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
