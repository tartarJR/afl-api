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
}
