<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vacantes extends Model
{
    protected $table = 'vacantes';

    protected $primaryKey = 'id_vacante';

    public $timestamps = false;

    protected $fillable = [
        'id_vacante',
        'fecha_solicitud', 
        'puesto', 
        'area', 
        'zona_de_trabajo', 
        'num_de_vacantes',
        'nivel_del_puesto',
        'tipoPuesto', 
        'salario', 
        'prestaciones', 
        'horarios',
        'motivo_vacante', 
        'edad_minima',
        'genero', 
        'rango_de_edad',
        'estado_civil',
        'apariencia', 
        'funciones', 
        'experiencia',
        'habilidades',
        'rasgos_personales', 
        'requisitos_adicionales', 
        'solicita', 
        'autoriza', 
        'estatus'
    ];
    protected $guarded = [];    
}
