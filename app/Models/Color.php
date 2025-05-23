<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Color extends Model
{
    use HasFactory,SoftDeletes;
        // Define fillable fields for mass assignment
        protected $fillable = ['name']; 
        public function products()
        {
            return $this->belongsToMany(Product::class, 'product_color');
        }

}
