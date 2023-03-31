<?php

namespace App\Http\Controllers;

use App\Models\Solicitud;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class SolicitudController extends Controller
{
    public function index(Solicitud $solicitud)
    {

        return view('auth.solicitud.index',[
            'solicitud' => $solicitud,
        ]);
        
    }

    public function delete(Solicitud $solicitud)
    {
        $solicitud -> delete();
        return back();
    }
    public function update(Solicitud $solicitud, Request $request)
    {
        
        $solicitud -> estatus_id = $request -> estatus;
        $solicitud -> save();
        return back();
    }
}
