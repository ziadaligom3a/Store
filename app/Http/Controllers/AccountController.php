<?php

namespace App\Http\Controllers;
use \App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(){
        $user = User::findOrfail(auth()->id());
        
        return view('components.Account.Dashboard',[

            'user' => $user
        ]);
    }

    public function Destroy(){

        auth()->logout();
        return redirect('/');
    }
    
   
}
