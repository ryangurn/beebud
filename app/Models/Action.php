<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Action extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'type',
        'send_alert',
        'send_update',
        'activation_delay',
        'deactivation_delay',
        'min_action_duration'.
        'heat_adjust_temp',
        'cool_adjust_temp',
        'activate_relay',
        'activate_relay_open'
    ];

    /**
     * @return HasOne
     */
    public function state(): HasOne
    {
        return $this->hasOne(State::class);
    }
}
