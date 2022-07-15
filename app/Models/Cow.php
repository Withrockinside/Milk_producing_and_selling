<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'date_of_birth',
        'farm_id',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
    ];

    public function farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }

    public function certificate(): HasOne
    {
        return $this->hasOne(Certificate::class);
    }

    public function milkConsignments(): BelongsToMany
    {
        return $this->belongsToMany(MilkConsignment::class, 'milk_consignment_cow');
    }
}
