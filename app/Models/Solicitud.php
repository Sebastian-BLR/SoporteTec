<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitudes';
    
    protected $casts = [
        'fecha' => 'datetime',
    ];
    
    protected $fillable = [
        'nombre',
        'email',
        'problema_id',
        'descripcion',
        'fecha',
        'direccion',
        'estatus_id',
    ];

    public function estatus(){
       return $this -> belongsTo(Estatu::class);
    }
}
