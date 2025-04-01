<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stalls extends Model
{
    protected $table = 'stalls';

    protected $primary_key = 'id';

    public $timestamps = false;

    protected $fillable = [
      'codigo_nomina',
      'nombre',
      'abreviatura',
      'cuenta',
      'abreviatura4',
      'numeracion',
      'codigo_interno'
    ];

    protected $guarded =[];
}
