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

    public function make(){

        return Customers::create([
            'point' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look.
            ",
            'name' => 'JAMES DEW',
            'img' => 'https://iili.io/gM41zF.jpg',
            'pro' => 'Photographer'
        ]);
    }
}
