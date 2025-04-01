<?php

namespace App\Http\Controllers;

use App\Models\empleados_general;
use App\Models\empleados_yobel;
use App\Models\prealta;
use App\Models\stalls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class humanresourcesController extends Controller
{
    public function catalogodepuestos()
    {
        return view('humanresources.operations.searchnselection.jobscatalog');
    }
    public function estatusvacantes()
    {
        return view('humanresources.operations.searchnselection.vacancystatus');
    }
    public function reporterotacion()
    {
        return view('humanresources.operations.searchnselection.rotationreport');
    }
    public function prealta()
    {
        return view('humanresources.operations.searchnselection.preup');
    }
    public function altayobel()
    {
        return view('humanresources.operations.searchnselection.altayobel');
    }
    public function altageneral()
    {
        return view('humanresources.operations.searchnselection.altageneral');
    }
    public function incidencias(){
        return view('humanresources.operations.incidencias');
    }
    public function infostalls()
    {

        $posts = stalls::all();
        $data = [];
        foreach ($posts as $post) {
            $tmp = [];
            array_push($tmp, $post->codigo_nomina);
            array_push($tmp, $post->nombre);
            array_push($tmp, $post->abreviatura);
            array_push($tmp, $post->cuenta);
            array_push($tmp, $post->abreviatura4);
            array_push($tmp, $post->numeracion);
            array_push($tmp, $post->codigo_interno);
            array_push($data, $tmp);
        }
        return $data;
    }

    public function preuplist()
    {
        $posts = prealta::all();
        $data = [];
        foreach ($posts as $post) {

            $nestedData['name'] = $post->name;
            $nestedData['lname'] = $post->lname;
            $nestedData['sname'] = $post->sname;
            $nestedData['email'] = $post->email;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['street'] = $post->street;
            $nestedData['streetnum'] = $post->streetnum;
            $nestedData['apple'] = $post->apple;
            $nestedData['col'] = $post->col;
            $nestedData['town'] = $post->town;
            $nestedData['state'] = $post->state;
            $nestedData['cp'] = $post->cp;
            $nestedData['application_date'] = $post->application_date;
            $nestedData['recrutier'] = $post->recrutier;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['fecha_nac'] = $post->fecha_nac;
            $nestedData['lugar_nac'] = $post->lugar_nac;
            $nestedData['estado_civil'] = $post->estado_civil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['genero'] = $post->genero;
            $nestedData['celular'] = $post->celular;
            $nestedData['telcasa'] = $post->telcasa;
            $nestedData['telcontacto'] = $post->telcontacto;
            $nestedData['cryptedid'] = Crypt::encrypt($post->id);

            $data[] = $nestedData;
        }

        return $data;
    }
    public function yobellist()
    {
        $posts = empleados_yobel::all();
        $data = [];
        foreach ($posts as $post) {
            $nestedData['id'] = $post->id;
            $nestedData['nejecutivo'] = $post->nejecutivo;
            $nestedData['fechaalta'] = $post->fechaalta;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
            $nestedData['correo'] = $post->correo;
            $nestedData['fechaalta2'] = $post->fechaalta2;
            $nestedData['fechabaja'] = $post->fechabaja;
            $nestedData['status'] = $post->status;
            $nestedData['salariomensual'] = $post->salariomensual;
            $nestedData['puesto'] = $post->puesto;
            $nestedData['centrodecostos'] = $post->centrodecostos;
            $nestedData['cuenta'] = $post->cuenta;
            $nestedData['predio'] = $post->predio;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['fechanac'] = $post->fechanac;
            $nestedData['lnac'] = $post->lnac;
            $nestedData['estcivil'] = $post->estcivil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['telcasa'] = $post->telcasa;
            $nestedData['cel'] = $post->cel;
            $nestedData['telcontacto'] = $post->telcontacto;
            $nestedData['calle'] = $post->calle;
            $nestedData['numero'] = $post->numero;
            $nestedData['manzana'] = $post->manzana;
            $nestedData['col'] = $post->col;
            $nestedData['cp'] = $post->cp;
            $nestedData['munic'] = $post->munic;
            $nestedData['estado'] = $post->estado;
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentesco'] = $post->parentesco;
            $nestedData['num_cuenta_bancario'] = $post->num_cuenta_bancario;
            $nestedData['banco'] = $post->banco;
            $nestedData['salario'] = $post->salario;
            $data[] = $nestedData;
        }

        return $data;
    }
    public function generallist()
    {
        $posts = empleados_general::all();
        $data = [];
        foreach ($posts as $post) {
            $nestedData['id'] = $post->id;
            $nestedData['nejecutivo'] = $post->nejecutivo;
            $nestedData['fechaalta'] = $post->fechaalta;
            $nestedData['nss'] = $post->nss;
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
            $nestedData['correo'] = $post->correo;
            $nestedData['fechaalta2'] = $post->fechaalta2;
            $nestedData['fechabaja'] = $post->fechabaja;
            $nestedData['status'] = $post->status;
            $nestedData['salariomensual'] = $post->salariomensual;
            $nestedData['puesto'] = $post->puesto;
            $nestedData['centrodecostos'] = $post->centrodecostos;
            $nestedData['cuenta'] = $post->cuenta;
            $nestedData['predio'] = $post->predio;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['fechanac'] = $post->fechanac;
            $nestedData['lnac'] = $post->lnac;
            $nestedData['estcivil'] = $post->estcivil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['tel'] = $post->tel;
            $nestedData['cel'] = $post->cel;
            $nestedData['calle'] = $post->calle;
            $nestedData['numero'] = $post->numero;
            $nestedData['manzana'] = $post->manzana;
            $nestedData['col'] = $post->col;
            $nestedData['cp'] = $post->cp;
            $nestedData['munic'] = $post->munic;
            $nestedData['estado'] = $post->estado;
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentesco'] = $post->parentesco;
            $nestedData['num_cuenta_bancario'] = $post->num_cuenta_bancario;
            $nestedData['banco'] = $post->banco;
            $nestedData['salario'] = $post->salario;
            $data[] = $nestedData;
        }

        return $data;
    }
    public function obtenerEmpleadoYobel(Request $request)
    {
        $id = $request->id;

        $post = empleados_yobel::select(
            'id', 'nejecutivo', 'fechaalta', 'nss', 'infonavit', 'fonacot', 'apaterno', 'amaterno', 
            'nombre', 'correo', 'fechaalta2', 'fechabaja', 'status', 'salariomensual', 'puesto', 
            'centrodecostos', 'cuenta', 'predio', 'curp', 'rfc', 'fechanac', 'lnac', 'estcivil', 
            'escolaridad', 'tel', 'cel', 'calle', 'col', 'cp', 'munic', 'estado', 'causabaja', 
            'beneficiario', 'parentesco', 'num_cuenta_bancario', 'banco', 'num_cuenta', 'salario', 
            'calle_fiscal', 'cp_fiscal', 'municipio_fiscal', 'entidad_federativa', 'telefono_fiscal'
        )->where('id', $id)->first();

        if ($post) {
            return $post->toArray();
        } else {
            return redirect()->route('otra_ruta')->with('error', 'Empleado no encontrado');
        }
    }
    public function obtenerEmpleadoGeneral(Request $request)
    {
        $id = $request->id;

        $post = empleados_general::select(
            'id', 'nejecutivo', 'fechaalta', 'nss', 'infonavit', 'fonacot', 'apaterno', 'amaterno', 
            'nombre', 'correo', 'fechaalta2', 'fechabaja', 'status', 'salariomensual', 'puesto', 
            'centrodecostos', 'cuenta', 'predio', 'curp', 'rfc', 'fechanac', 'lnac', 'estcivil', 
            'escolaridad', 'telcasa', 'telcontacto', 'cel', 'calle', 'col', 'cp', 'munic', 'estado', 
            'causabaja', 'beneficiario', 'parentesco', 'num_cuenta_bancario', 'banco', 'num_cuenta', 
            'salario', 'calle_fiscal', 'cp_fiscal', 'municipio_fiscal', 'entidad_federativa', 'telefono_fiscal'
        )->where('id', $id)->first();

        if ($post) {
            return $post->toArray();
        } else {
            return redirect()->route('otra_ruta')->with('error', 'Empleado no encontrado');
        }
    }
    public function obtenerEmpleadoPrealta(Request $request)
    {
        $id = Crypt::decrypt($request->id);

        $post = prealta::select(
            'name as nombre', 'lname as apaterno', 'sname as amaterno', 'email as correo', 'curp', 
            'rfc', 'street as calle', 'streetnum as numero', 'apple as manzana', 'col as colonia', 
            'town as municipio', 'state as estado', 'cp', 'application_date as fecha_envio', 
            'recrutier as reclutador', 'nss', 'infonavit', 'fonacot', 'fecha_nac as fecha_nacimiento', 
            'lugar_nac as lugar_nacimiento', 'estado_civil', 'escolaridad', 'genero', 'celular', 
            'telcasa', 'telcontacto'
        )->where('id', $id)->first();

        if ($post) {
            $tipo = $request->tipo;
            $idnuevoempleado = $tipo == "yobel" 
                ? DB::table('empleados_yobel')->max('id') + 1 
                : DB::table('empleados_base')->max('id') + 1;

            $post->idnuevoempleado = $idnuevoempleado;
            return $post->toArray();
        } else {
            return redirect()->route('otra_ruta')->with('error', 'Empleado no encontrado');
        }
    }
    public function asignarEmpleadoYobel(Request $request)
    {
        $idprealta = prealta::where('curp', $request->curp)->pluck('id')->first();
        $fechaactual = now()->format('Y-m-d');
        $idnuevoempleado = DB::table('empleados_yobel')->max('id');
        $idnuevoempleado++;
        try {
            DB::table('empleados_yobel')->insert([
                'id' => $idnuevoempleado,
                'nejecutivo' => strtoupper($request->reclutador),
                'fechaalta' => strtoupper($request->fecha_envio),
                'nss' => strtoupper($request->nss),
                'infonavit' => strtoupper($request->infonavit),
                'fonacot' => strtoupper($request->fonacot),
                'apaterno' => strtoupper($request->apaterno),
                'amaterno' => strtoupper($request->amaterno),
                'nombre' => strtoupper($request->nombre),
                'correo' => strtoupper($request->correo),
                'fechaalta2' => strtoupper($request->fecha_alta),
                'status' => strtoupper('ALTA'),
                'salariomensual' => strtoupper($request->salario),
                'puesto' => strtoupper($request->puesto),
                'centrodecostos' => strtoupper($request->centro_costos),
                'cuenta' => strtoupper($request->cuenta),
                'predio' => strtoupper($request->predio),
                'curp' => strtoupper($request->curp),
                'rfc' => strtoupper($request->rfc),
                'fechanac' => strtoupper($request->fecha_nacimiento),
                'lnac' => strtoupper($request->lugar_nacimiento),
                'estcivil' => strtoupper($request->estado_civil),
                'escolaridad' => strtoupper($request->escolaridad),
                'cel' => strtoupper($request->celular),
                'telcasa' => strtoupper($request->telcasa),
                'telcontacto' => strtoupper($request->telcontacto),
                'calle' => strtoupper($request->calle),
                'numero' => strtoupper($request->numero),
                'manzana' => strtoupper($request->manzana),
                'col' => strtoupper($request->colonia),
                'cp' => strtoupper($request->cp),
                'munic' => strtoupper($request->municipio),
                'estado' => strtoupper($request->estado),
                'beneficiario' => strtoupper($request->beneficiario),
                'parentesco' => strtoupper($request->parentesco),
                'num_cuenta_bancario' => strtoupper($request->cuenta_bancaria),
                'banco' => strtoupper($request->banco),
                'salario' => strtoupper($request->salario),
            ]);
            $prealta = prealta::find($idprealta);
            $prealta->delete();

            return response()->json(['success' => "El usuario ha sido asigando a Yobel"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "Ocurrió un error: " . $th], 401);
        }

    }
    public function asignarEmpleadoGeneral(Request $request)
    {
        $idprealta = prealta::where('curp', $request->curp)->pluck('id')->first();
        $fechaactual = now()->format('Y-m-d');
        $idnuevoempleado = DB::table('empleados_base')->max('id');
        $idnuevoempleado++;
        try {
            DB::table('empleados_base')->insert([
                'id' => $idnuevoempleado,
                'nejecutivo' => strtoupper($request->reclutador),
                'fechaalta' => strtoupper($request->fecha_entrevista),
                'nss' => strtoupper($request->nss),
                'infonavit' => strtoupper($request->infonavit),
                'fonacot' => strtoupper($request->fonacot),
                'apaterno' => strtoupper($request->apaterno),
                'amaterno' => strtoupper($request->amaterno),
                'nombre' => strtoupper($request->nombre),
                'correo' => strtoupper($request->correo),
                'sexo' => strtoupper($request->genero),
                'fechanotific' => strtoupper($request->fecha_envio),
                'status' => strtoupper('ALTA'),
                'salariomensual' => strtoupper($request->salario),
                'puesto' => strtoupper($request->puesto),
                'cuenta' => strtoupper($request->cuenta),
                'predio' => strtoupper($request->centro_costos),
                'curp' => strtoupper($request->curp),
                'rfc' => strtoupper($request->rfc),
                'fechanac' => strtoupper($request->fecha_nacimiento),
                'lnac' => strtoupper($request->lugar_nacimiento),
                'estcivil' => strtoupper($request->estado_civil),
                'escolaridad' => strtoupper($request->escolaridad),
                'cel' => strtoupper($request->celular),
                'telcasa' => strtoupper($request->telcasa),
                'telcontacto' => strtoupper($request->telcontacto),
                'cel' => strtoupper($request->celular),
                'calle' => strtoupper($request->calle),
                'numero' => strtoupper($request->numero),
                'manzana' => strtoupper($request->manzana),
                'col' => strtoupper($request->colonia),
                'cp' => strtoupper($request->cp),
                'munic' => strtoupper($request->municipio),
                'estado' => strtoupper($request->estado),
                'beneficiario' => strtoupper($request->beneficiario),
                'parentesco' => strtoupper($request->parentesco),
                'num_cuenta_bancario' => strtoupper($request->cuenta_bancaria),
                'banco' => strtoupper($request->banco),
                'predio' => strtoupper($request->predio),
                'salario' => strtoupper($request->salario),
            ]);

            $prealta = prealta::find($idprealta);
            $prealta->delete();

            return response()->json(['success' => "El usuario ha sido asigando a la base General"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "Ocurrió un error: " . $th], 401);
        }

    }

    public function eliminarempleadogeneral(Request $request)
    {
        try {
            $prealta = empleados_general::find($request->id);
            $prealta->delete();
            return response()->json(['success' => "El registro ha sido eliminado"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "No se elimina registro"], 401);
        }
    }
    public function eliminarempleadoyobel(Request $request)
    {

        try {
            $prealta = empleados_yobel::find($request->id);
            $prealta->delete();
            return response()->json(['success' => "El registro ha sido eliminado"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "No se elimina registro"], 401);
        }
    }

    public function editarempleadogeneral(Request $request)
    {
        $registro = empleados_general::find($request->id);
        try {
            $registro->puesto = $request->puesto;
            $registro->predio = $request->centrocostos;
            $registro->salario = $request->sueldo;
            $registro->calle_fiscal = $request->calle_fiscal;
            $registro->cp_fiscal = $request->cp_fiscal;
            $registro->municipio_fiscal = $request->municipio_fiscal;
            $registro->telefono_fiscal = $request->telefono_fiscal;
            $registro->entidad_federativa = $request->entidad_federativa;
            $registro->status = $request->estatus;
            // Actualiza los demás campos según tu modelo y formulario
            if ($request->estatus == "BAJA") {
                $registro->fechabaja = $request->fecha_baja;
                $registro->causabaja = $request->motivo_baja;
            }
            // Guardar los cambios en la base de datos
            $registro->save();
            return response()->json(['success' => "Actualización completada"], 200);
        } catch (\throwable $th) {
            return response()->json(['error' => "Registro no actualizado" . $th], 401);
        }

    }
    public function editarempleadoyobel(Request $request)
    {

        $registro = empleados_yobel::find($request->id);
        try {
            $registro->puesto = $request->puesto;
            $registro->centrodecostos = $request->centrocostos;
            $registro->salario = $request->sueldo;
            $registro->calle_fiscal = $request->calle_fiscal;
            $registro->cp_fiscal = $request->cp_fiscal;
            $registro->municipio_fiscal = $request->municipio_fiscal;
            $registro->telefono_fiscal = $request->telefono_fiscal;
            $registro->entidad_federativa = $request->entidad_federativa;
            $registro->status = $request->estatus;
            if ($request->estatus == "BAJA") {
                $registro->fechabaja = $request->fecha_baja;
                $registro->causabaja = $request->motivo_baja;
            }
            // Actualiza los demás campos según tu modelo y formulario

            // Guardar los cambios en la base de datos
            $registro->save();
            return response()->json(['success' => "Actualización completada"], 200);
        } catch (\throwable $th) {
            return response()->json(['error' => "Registro no actualizado" . $th], 401);
        }

    }

    public function horariosempleados(Request $request){
        $results = DB::table('horarios_empleados')->get();
        return $results;
    }



}
