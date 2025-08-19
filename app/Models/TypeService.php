<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TypeService extends Model
{
    use HasFactory;

    const ACTIVE = 'ativo';

    const INACTIVE = 'inativo';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => Status::class,
    ];

    public function getStatusValueAttribute(): int
    {
        return $this->status === Status::Active ? 1 : 0;
    }

    public function setStatusValueAttribute($value): void
    {
        $this->status = $value == 1 ? Status::Active : Status::Inactive;
    }

    public static function statusList()
    {
        return [
            self::ACTIVE => 'Ativo',
            self::INACTIVE => 'Inativo',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->name);

            $model->user_id = Auth::user()->id;
        });

        static::updating(function ($model) {
            $model->slug = Str::slug($model->name);

            $model->user_id = Auth::user()->id;
        });
    }

    public function scopeActives($query)
    {
        return $query->where('status', Status::Active);
    }

    public function scopeHasUser($query)
    {
        return $query->where('user_id', Auth::user()->id);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
