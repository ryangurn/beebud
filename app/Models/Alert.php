<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Alert extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'acknowledge_reference',
        'acknowledgement',
        'date',
        'time',
        'severity',
        'text',
        'alert_number',
        'alert_type',
        'operator_alert',
        'reminder',
        'show_idt',
        'show_web',
        'send_email',
        'remind_me_later',
        'thermostat_identifier',
        'notification_type'
    ];

    /**
     * @return HasOne
     */
    public function thermostat(): HasOne
    {
        return $this->hasOne(Thermostat::class);
    }
}
