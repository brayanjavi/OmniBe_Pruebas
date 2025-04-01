<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siteController extends Controller
{
    public function servicios()
    {
        return view('servicios');
    }
    public function bi()
    {
        return view('bi');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function formulario()
    {
        return view('formulario');
    }
    public function enviar_datos(Request $request)
    {
        try {
            DB::table('prealta')->insert([
                'name' => strtoupper($request->name),
                'lname' => strtoupper($request->lname),
                'sname' => strtoupper($request->sname),
                'email' => strtoupper($request->email),
                'curp' => strtoupper($request->curp),
                'rfc' => strtoupper($request->rfc),
                'street' => strtoupper($request->street),
                'streetnum' => $request->streetnum,
                'apple' => strtoupper($request->apple),
                'col' => strtoupper($request->col),
                'town' => strtoupper($request->town),
                'state' => strtoupper($request->state),
                'application_date' => strtoupper($request->application_date),
                'recrutier' => strtoupper($request->recrutier),
                'nss' => strtoupper($request->nss),
                'infonavit' => strtoupper($request->infonavit),
                'fonacot' => strtoupper($request->fonacot),
                'fecha_nac' => strtoupper($request->fecha_nac),
                'lugar_nac' => strtoupper($request->lugar_nac),
                'estado_civil' => strtoupper($request->estado_civil),
                'escolaridad' => strtoupper($request->escolaridad),
                'genero' => strtoupper($request->genero),
                'celular' => strtoupper($request->celular),
                'telcasa' => strtoupper($request->telcasa),
                'telcontacto' => strtoupper($request->telcontacto),
                'cp' => $request->cp,
            ]);

            return response()->json(['success' => "Formulario enviado correctamente"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "Ocurrió un error: " . $th], 401);
        }

    }
}
