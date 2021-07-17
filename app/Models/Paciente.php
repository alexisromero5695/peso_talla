<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente';
    public $timestamps = false;   
    protected $primaryKey = 'id_paciente';

    protected $fillable = [
        'dni_paciente',
        'apellidopaterno_paciente',
        'apellidomaterno_paciente',
        'nombre_paciente',
        'peso_paciente',
        'talla_paciente',    
    ];
}
