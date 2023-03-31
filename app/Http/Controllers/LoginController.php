<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() 
    {
        if(Auth::user()){
            return redirect()->route('dashboard');
        }
        
        $loginActive = 'active';
        return view('login',['loginActive' => $loginActive ]);
    }

    public function store(Request $request)
    {
        $remember = $request -> remember;
        $data = $this -> validate($request,[
            'user'     => 'required',
            'password' => 'required',
        ]);

        $auth = auth() -> attempt($data, $remember);
        if(!$auth){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('dashboard');
    }
}
