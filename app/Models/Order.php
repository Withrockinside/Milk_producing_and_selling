<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'date',
        'total_price'
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')->withTimestamps();
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
