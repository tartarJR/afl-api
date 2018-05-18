<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'teams_reports');
    }
}
