<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ForgetController extends Controller
{
    public function index(){

        return view('Forget.Forget');
    }
    

    public function change()
    {   
        
        $user = User::find(auth()->id());
        $validate = request()->validate([

            'old' => 'required',
            'new' => 'required'

        ]);
        $auth = Auth::attempt(['username' => auth()->user()->username, 'password' => $validate['old']]);
        if($auth == true):
            $validate['new'] = bcrypt($validate['new']);
            $user->update(['password' => $validate['new']]);
            auth()->login($user);
            return redirect('/');
        endif;
    }
}
