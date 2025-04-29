<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
        'color_id',
        'size_id',
        'material_id'
    ];

    public function order()
{
    return $this->belongsTo(Order::class);
}

public function product()
{
    return $this->belongsTo(Product::class);
}
public function color()
{
    return $this->belongsTo(Color::class);
}

public function size()
{
    return $this->belongsTo(Size::class);
}

public function material()
{
    return $this->belongsTo(Material::class);
}

}
