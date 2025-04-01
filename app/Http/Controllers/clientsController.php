<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientsController extends Controller
{
    public function cuestionario()    {
        return view('clients.cuestionario');
    }
}
