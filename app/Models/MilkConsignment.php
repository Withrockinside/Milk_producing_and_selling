<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MilkConsignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function cows(): BelongsToMany
    {
        return $this->belongsToMany(Cow::class, 'milk_consignment_cow');
    }

    public function productConsignments(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}

