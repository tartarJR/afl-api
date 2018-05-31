<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function refereeTypes()
    {
        return $this->belongsToMany(RefereeType::class, 'games_referees')->withPivot('game_id');
    }

    public function games()
    {
        return $this->belongsToMany(Game::class, 'games_referees')->withPivot('game_id', 'referee_type_id');
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }

    public function getExperienceStringAttribute()
    {
        return $this->experience . ' yıl';
    }

    public function hasRuledGames()
    {
        return count($this->games()->where('is_played', 1)->get()) > 0 ? true : false;
    }

    public function hasGamesToRule()
    {
        return count($this->games()->where('is_played', 0)->get()) > 0 ? true : false;
    }

    public function getBirthDateAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->format('d/m/Y');
    }

    public function setBirthDateAttribute($value)
    {
        $this->attributes['birth_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }
}
