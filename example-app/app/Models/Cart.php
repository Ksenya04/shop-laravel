<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'user_id', 'product_id'
    ];

    public function product()
{
    return $this->belongsTo(Product::class);
}
    
}
