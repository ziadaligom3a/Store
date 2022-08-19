<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use \App\Models\Product;
use \App\Models\Customers;
use \App\Http\Controllers\ProductController;
use \App\Http\Middleware\MustBeAdmin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetController;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\UserProducts;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::controller(ProductController::class)->group(function(){

    
    Route::get('/','index');
    Route::get('/products',fn(Product $product) => view('product',['product' => $product->all()])
    );
    Route::get('about',fn() => view('about'));
    Route::get('why',fn() => view('why'));
    Route::get('testimonial',function(Customers $customer){

        return view('testimonial',[
            'customer' => $customer->get()
        ]);
    });
    
    Route::get('Product/{id}',function(Product $id){
        
        if(auth()->id()):
        return view('components.ProductS',['product' => $id]);
        else:
            return redirect('/Login');
    endif;
    });
});

Route::middleware('MustBeAdmin')->group(function(){

    Route::get('Admin/Dashboard',[AdminController::class,'index']);
    Route::post('Admin/Add_Product',[AdminController::class,'Add']);
    Route::post('Admin/Edit/{id}',[AdminController::class,'Edit']);
    Route::get('Admin/Delete/{id}',function($id){

        
        DB::table('products')->where('id',$id)->delete();
        return redirect('/Admin/Dashboard/?p=Products');

    });
});

Route::middleware('guest')->group(function(){

    Route::get('Login',[LoginController::class,'index']);
    Route::post('Login',[LoginController::class,'check']);
    Route::get('Register',[RegisterController::class,'index']);
    Route::post('Register',[RegisterController::class,'check']);
    Route::get('Forget',[ForgetController::class,'index']);
    
});

Route::middleware('auth')->group(function(){

    Route::get('My-Account',[AccountController::class,'index']);
    Route::post('logout',[AccountController::class,'Destroy']);
    Route::post('Forget',[ForgetController::class,'change']);
    Route::post('Add_Product',function(){

    

            try{
        
                $validate = request()->validate([
        
                    'id' => ['required',Rule::exists('products','id')]
        
                ]);
        
                $user = User::find(auth()->id());
                $product = Product::find($validate['id']);
                $user->favourites()->save($product);
                return redirect('/My-Account?p=Products');
            }catch(\Exception $e){
        
                return back()->with('Error',$e->getMessage());
            }

       

    }); 
  
    Route::get('My-Account/Delete/{id}',function($id){


        DB::table('user_products')->where('product_id',$id)->delete();
        return redirect('/My-Account?p=Products');
    });
});