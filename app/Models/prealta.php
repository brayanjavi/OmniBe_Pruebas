<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prealta extends Model
{
    protected $table = 'prealta';

    protected $primary_key = 'id';

    public $timestamps = false;

    protected $fillable = [
      'id',
      'name',
      'lname',
      'sname',
      'email',
      'curp',
      'rfc',
      'street',
      'streetnum',
      'apple',
      'col',
      'town',
      'state',
      'application_date',
      'recrutier',
      'cp'
    ];

    protected $guarded =[];
}
