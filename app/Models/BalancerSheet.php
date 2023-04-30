<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalancerSheet extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['endingBalance'];

    public function transactions()
    {
        return $this->hasMany(BalancerTransaction::class)->orderBy('date');
    }

    protected function beginningBalance(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100,
            set: fn ($value) => $value * 100,
        );
    }

    public function getEndingBalanceAttribute()
    {
        return $this->transactions()->sum('amount') / 100;
    }
}
