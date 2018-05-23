<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function week()
    {
        return $this->belongsTo(Week::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class);
    }

    public function referees()
    {
        return $this->belongsToMany(Referee::class, 'games_referees')
            ->withPivot('referee_type_id')
            ->join('referee_types', 'referee_type_id', 'referee_types.id')
            ->select('first_name', 'last_name', 'referee_types.type');
    }

    // this relationship is not necessary
    public function refereeTypes()
    {
        return $this->belongsToMany(RefereeType::class, 'games_referees');
    }
}
