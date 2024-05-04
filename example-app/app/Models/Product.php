<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'type', 'description', 'price'
    ];
    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}
