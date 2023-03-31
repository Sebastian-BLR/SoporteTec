<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use App\Models\Solicitud;
use App\Models\ProblemaTec;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this -> middleware('auth');
    }
    
    public function index() {
        Paginator::useBootstrapFive();
        $solicitudes = Solicitud::orderBy('fecha', 'asc')->orderBy('created_at', 'asc')-> paginate(10);
        $estatus = Estatu::all();

        
        return view('auth.dashboard', [
            'solicitudes' => $solicitudes,
            'estatus'     => $estatus

        ]);
    }
}
