<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Climate extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'climate_reference',
        'is_occupied',
        'is_optimized',
        'cool_fan',
        'heat_fan',
        'vent',
        'ventilator_min_on_time',
        'owner',
        'type',
        'cool_temp',
        'heat_temp'
    ];

    /**
     * @return HasOne
     */
    public function program(): HasOne
    {
        return $this->hasOne(Program::class);
    }
}
