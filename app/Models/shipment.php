<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipment extends Model
{
    use HasFactory;
// Shipment.php (Model)
protected $casts = [
    'delivered_at' => 'datetime',
];

    protected $fillable = [
        'order_id',
        'shipment_status',
        'tracking_number',
        'shipping_address',
        'shipping_method',
        'shipping_cost',
        'shipped_at',
        'delivered_at',
    ];

    // Define relationship with Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
