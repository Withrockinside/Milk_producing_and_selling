<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'result',
        'cow_id'
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function cow(): BelongsTo
    {
        return $this->belongsTo(Cow::class);
    }
}
