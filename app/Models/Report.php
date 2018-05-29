<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'teams_reports');
    }
}
