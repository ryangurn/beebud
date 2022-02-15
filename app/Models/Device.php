<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Device extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'device_id',
        'name'
    ];

    /**
     * @return HasOne
     */
    public function thermostat(): HasOne
    {
        return $this->hasOne(Thermostat::class);
    }
}
