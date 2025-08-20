<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends ModelPattern
{
    public function budgets(): HasMany
    {
        return $this->hasMany(Budget::class);
    }
}
