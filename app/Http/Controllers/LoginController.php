<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LoginController extends Controller
{
    public function index(){

        return view('Login.Login');
    }

    public function check(){

        $validate = request()->validate([

            'username' => ['required',Rule::exists('users','username')],
            'password' => 'required'

        ]);
        // $validate['password'] = bcrypt($validate['password']);
        $auth = Auth::attempt($validate);
        if($auth == true):
        
            auth()->login(auth()->user());
            return redirect('/');

        endif;
    }
}
