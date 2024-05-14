<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wage extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function employees(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
