<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Capability extends Model
{
    /**
     * @return HasMany
     */
    public function fan_capabilities(): HasMany
    {
        return $this->hasMany(FanCapability::class);
    }
}
