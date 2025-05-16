<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

     protected $fillable = [
        'code',
        'discount_type',  
        'amount',       
        'user_id',       
        'valid_from',
        'valid_until'
    ];

   
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    // Calculate the discount based on the subtotal and discount type
    public function calculateDiscount($subtotal)
    {
        if ($this->discount_type == 'fixed') {
            return $this->amount;
        } elseif ($this->discount_type == 'percentage') {
            return ($this->amount / 100) * $subtotal;
        }
        return 0;
    }
}
