<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
