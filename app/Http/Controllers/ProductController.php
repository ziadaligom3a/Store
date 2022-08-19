<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(Product $product, Customers $custom){

    

        return view('index',['product' => $product->all(), 'custom' => $custom->get()]);

   }

   public static function search($search){


    $data = Product::select('*')->where('name','LIKE','%' . "$search" . '%')->get();
    return $data;
   }
}
