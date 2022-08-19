<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function favourites()
    {
        return $this->belongsToMany(User::class, 'user_products', 'product_id', 'user_id')
            ->withTimestamps();
    }
}
