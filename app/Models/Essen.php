<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Essen extends Model{
    protected $fillable = [
        'name',
        'category',
        'image',
        'price', // Assuming you have a price field
        'description', // Assuming you have a description field
    ];
    public function buys()
    {
        return $this->hasMany(Buy::class, 'product_id');
    }
}
