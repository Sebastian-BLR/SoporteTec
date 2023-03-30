<?php

namespace App\Http\Controllers;

use App\Models\Estatu;
use App\Models\Solicitud;
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
        $solicitudes = Solicitud::orderBy('created_at', 'desc')-> paginate(10);
        
        return view('auth.dashboard', [
            'solicitudes' => $solicitudes,
        ]);
    }
}
