<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

     protected $fillable = [
        'code',
        'discount_type',  // 'fixed' or 'percentage'
        'amount',         // Discount amount
        'user_id',        // Optional if coupons are user-specific
        'valid_from',
        'valid_until'
    ];

    // Define the relation to the Product model (if needed)
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
