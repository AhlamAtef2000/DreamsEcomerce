<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingMethod extends Model
{
    use HasFactory;
    protected $table="shipping_methods";
    protected $fillable = ['name', 'price', 'country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
