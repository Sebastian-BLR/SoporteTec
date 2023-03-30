<?php

namespace App\Http\Controllers;

use App\Models\ProblemaTec;
use App\Models\Solicitud;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index(Request $request)
    {
        $contactoActive = 'active';
        $fechaMin = Carbon::now()->addDay(3)->format('Y-m-d');
        $problemas = ProblemaTec::all();

        return view('contacto',[
            'contactoActive' => $contactoActive,
            'problemas' => $problemas,
            'fechaMin'  => $fechaMin,

        ]);
    }

    public function store(Request $request)
    {
        $data = $this -> validate($request,[
            'nombre'      => ['required'],
            'email'       => ['required', 'email'],
            'problema_id' => ['required'],
            'descripcion' => ['required', 'min:10'],
            'fecha'       => ['required'],
            'direccion'       => ['required'],

        ]);
        $data['estatus_id'] = '1';
        Solicitud::create($data);

        $mensaje = '¡Gracias por programar la visita de nuestro equipo técnico de SoporTec! Nos aseguraremos de estar presentes en la fecha acordada para resolver cualquier problema técnico que tenga. Estamos a su disposición para ayudarle en cualquier momento, no dude en ponerse en contacto con nosotros si tiene alguna pregunta. ¡Gracias por confiar en SoporTec y esperamos poder solucionar cualquier problema que tenga en la fecha acordada!';

        return redirect()->route('mensaje_exito')->with('mensaje_exito', $mensaje);
    }
}
