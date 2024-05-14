<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Activity extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function partners(): BelongsTo 
    {
        return $this->belongsTo(Partner::class,'partner');
    }

    public function trips(): BelongsTo
    {
        return $this->belongsTo(Trip::class);
    }
}
