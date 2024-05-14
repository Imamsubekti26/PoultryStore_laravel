<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function activity(): HasMany
    {
        return $this->hasMany(Activity::class, 'trip');
    }

    public function cars(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car');
    }

    public function employee1(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee1');
    }

    public function employee2(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee2');
    }
}
