<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'product_id', 'size_id', 'color_id', 'material_id', 'quantity', 'price'];

    public function cart()
{
    return $this->belongsTo(Cart::class);
}

public function product()
{
    return $this->belongsTo(Product::class);
}
public function size()
{
    return $this->belongsTo(Size::class);
}

public function color()
{
    return $this->belongsTo(Color::class);
}

public function material()
{
    return $this->belongsTo(Material::class);
}
}
