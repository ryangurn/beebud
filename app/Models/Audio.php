<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Audio extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'playback_volume',
        'microphone_enabled',
        'sound_alert_volume',
        'sound_tick_volume'
    ];

    /**
     * @return HasOne
     */
    public function thermostat(): HasOne
    {
        return $this->hasOne(Thermostat::class);
    }
}
