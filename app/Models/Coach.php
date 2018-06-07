<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function coachType()
    {
        return $this->belongsTo(CoachType::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
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
