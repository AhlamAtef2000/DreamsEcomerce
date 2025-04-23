<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Material extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = ['name'];  // Assuming material has a name like "Cotton", "Polyester"
    public function products()
    {
        return $this->belongsToMany(Product::class, 'material_id');
    }



}
