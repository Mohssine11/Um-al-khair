<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
        'product_id',
        'Nom',
        'telephone',
        'city',
        'adresse',
    ];

    public function product()
    {
        return $this->belongsTo(Essen::class, 'product_id');
    }
}
