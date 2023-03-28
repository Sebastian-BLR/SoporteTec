<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitudeController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
