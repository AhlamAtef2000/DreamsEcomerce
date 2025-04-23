<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'total_price',
        'status',
        'shipping_address',
        'country',
        'first_name',
        'last_name',
        'address',
        'apartment',
        'town_city',
        'state_county',
        'postcode_zip',
        'email',
        'phone',
        'order_notes',
        'payment_method',
        'shipping_method_id'
    ];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function items()
{
    return $this->hasMany(OrderItem::class);
}
public function shipment()
{
    return $this->hasOne(Shipment::class);
}

}
