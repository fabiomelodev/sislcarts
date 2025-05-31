<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected static function booted(): void
    {
        static::creating(function ($model) {
            $model->user_id = Auth::user()->id;
        });

        static::updating(function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }

    public function budgets(): HasMany
    {
        return $this->hasMany(Budget::class);
    }
}
