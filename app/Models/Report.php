<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'teams_reports')->withTimestamps();
    }
}
