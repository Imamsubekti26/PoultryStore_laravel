<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trip(): HasMany
    {
        return $this->hasMany(Trip::class, 'car');
    }
}
