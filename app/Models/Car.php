<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trip(): HasOne
    {
        return $this->hasOne(Trip::class);
    }
}
