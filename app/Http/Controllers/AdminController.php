<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Product $product){

        return view('components.Admin.Dashboard',['product' => $product->get()]);
    }

    public function Add(){

        try{
        $validate = request()->validate([

            'name' => 'required',
            'price' => 'required',
            'img' => 'required'

        ]);
        $validate['img'] = request()->file('img')->store('thumbnails');
        $product = Product::create($validate);
       
        return redirect("/Product/{$product->id}");
    }catch(\Exception $e){


        return back()->with('Error', $e->getMessage());
    }


    }

    public function Edit(Product $id){

        // $p = Product::findOrFail($id);
       
        try{
            $validate = request()->validate([
    
                'name' => 'required',
                'price' => 'required',
                'img' => 'image'
    
            ]);
            if(isset($validate['img'])):
            $validate['img'] = request()->file('img')->store('thumbnails');
        endif;
            $id->update($validate);

            return redirect("/Product/{$id->id}");
        }catch(\Exception $e){
    
    
            return back()->with('Error', $e->getMessage());
        }
    
    }
}
