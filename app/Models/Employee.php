<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $hidden = ['password'];
    
    protected function casts(): array
    {
        return [ 'password' => 'hashed'];
    }
    
    public function trip(): HasMany
    {
        return $this->hasMany(Trip::class, 'employee1');
    }

    public function salaries(): HasMany
    {
        return $this->hasMany(Salary::class,'employee');
    }
    
    public function wages(): HasMany
    {
        return $this->hasMany(Salary::class,'employee');
    }
}
