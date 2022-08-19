<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use \App\Models\User;
class RegisterController extends Controller
{
    public function index(){

        return view('Register.Register');
    }


    public function check(){
    
    try{
        $validate = request()->validate([
            'name' => 'required',
            'username' => ['required',Rule::unique('users','username')],
            'email' => ['required',Rule::unique('users','email')],
            'password' => 'required'

        ]);
        $validate['password'] = bcrypt($validate['password']);
        $create = User::create($validate);
        $auth = auth()->login($create);
        return redirect('/');
    
    }catch(\Exception $e){

        
        return back()->with('success', $e->getMessage());;

    }
}

}
