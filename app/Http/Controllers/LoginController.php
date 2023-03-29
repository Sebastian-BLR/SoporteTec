<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() 
    {
        $loginActive = 'active';
        return view('login',['loginActive' => $loginActive ]);
    }

    public function store(Request $request)
    {
        $data = $this -> validate($request,[
            'user'     => 'required',
            'password' => 'required',
        ]);

        $auth = auth() -> attempt($data);
        if(!$auth){
            return back()->with('mensaje', 'Credenciales incorrectas');
        }

        return redirect()->route('dashboard');
    }
}
