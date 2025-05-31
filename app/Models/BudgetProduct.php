<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgetProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'budget_id',
        'product_id'
    ];
}
