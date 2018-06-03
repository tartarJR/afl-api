<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function getGameDateTimeAttribute($value)
    {
        return Carbon::parse($value)->format('Y-m-d\TH:i');
    }

    public function getLocalGameDateTimeAttribute()
    {
        return Carbon::parse($this->attributes['game_date_time'])->format('d/m/Y H:i');
    }

    public function setGameDateTimeAttribute($value)
    {
        $this->attributes['game_date_time'] = Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    // filter games by season, week and team
    public function scopeOfFilter($query, $season_id, $week_id, $team_id)
    {
        return $query->with('season', 'week', 'homeTeam', 'awayTeam')
            ->when($season_id != null, function ($q) use ($season_id) {
                return $q->where('season_id', $season_id);
            })->when($week_id != null, function ($q) use ($week_id) {
                return $q->where('week_id', $week_id);
            })
            ->when($week_id != null, function ($q) use ($week_id) {
                return $q->where('week_id', $week_id);
            })
            ->when($team_id != null, function ($q) use ($team_id) {
                return $q->where(function ($q) use ($team_id) {
                    $q->where('home_team_id', $team_id)
                        ->orWhere('away_team_id', $team_id);
                });
            })
            ->paginate(10);
    }
}
