<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'price',
        'image_path',
        'stock',
        'category_id',
        'is_on_sale',
        'status_id',
        'size_id',
        'material_id',
        'discount_percentage',
        'sale_end_date',

    ];


    public function category()
{
    return $this->belongsTo(Category::class);
}

public function cartItems()
{
    return $this->hasMany(CartItem::class);
}

public function orderItems()
{
    return $this->hasMany(OrderItem::class);
}

public function reviews()
{
    return $this->hasMany(Review::class);
}
public function status()
{
    return $this->belongsTo(Status::class);
}
public function sizes()
{
    return $this->belongsToMany(Size::class, 'product_size');
}

// Relationship with Color (Many-to-Many)
public function colors()
{
    return $this->belongsToMany(Color::class, 'product_color');
}

// Relationship with Images (One-to-Many)
public function images()
{
    return $this->hasMany(ProductImage::class);
}
public function materials()
{
    return $this->belongsToMany(Material::class, 'product_material');
}

// Product Model (App\Models\Product)

// In Product model

public function users()
{
    return $this->belongsToMany(User::class, 'favorites', 'product_id', 'user_id');
}






}
