<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function primaryPosition()
    {
        return $this->belongsTo(Position::class);
    }

    public function secondaryPosition()
    {
        return $this->belongsTo(Position::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
