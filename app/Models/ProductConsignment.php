<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductConsignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity',
        'manufacturing_date',
        'expiring_date',
        'milk_consignment_id',
        'product_id',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function milkConsignment(): BelongsTo
    {
        return $this->belongsTo(MilkConsignment::class);
    }
}
