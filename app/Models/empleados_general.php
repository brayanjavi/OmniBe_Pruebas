<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados_general extends Model
{
    protected $table = 'empleados_base';

    protected $primary_key = 'id';

    public $timestamps = false;

    protected $fillable = [
      'id',
      'nejecutivo',
      'fechaalta',
      'nss',
      'apaterno',
      'amaterno',
      'nombre',
      'correo',
      'fechaalta2',
      'fechabaja',
      'status',
      'salariomensual',
      'puesto',
      'centrodecostos',
      'cuenta',
      'predio',
      'curp',
      'rfc',
      'fechanac',
      'lnac',
      'estcivil',
      'tel',
      'cel',
      'calle',
      'numero',
      'manzana',
      'col',
      'cp',
      'munic',
      'causabaja',
      'beneficiario',
      'parentesco',
      'num_cuenta_bancario',
      'banco',
      'num_cuenta',
      'salario',
    ];

    protected $guarded =[];
}



