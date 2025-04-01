<?php

namespace App\Http\Controllers;

use App\Models\vacantes;
use Illuminate\Http\Request;

class VacantesController extends Controller
{
    /**
     * Muestra una lista de vacantes.
     */
    public function index()
    {
        $vacantes = vacantes::all();
        return view('vacantes.index', compact('vacantes'));
    }

    /**
     * Muestra el formulario para crear una nueva vacante.
     */
    public function create()
    {
        return view('vacantes.create');
    }

    /**
     * Almacena una nueva vacante en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_solicitud' => 'required|date',
            'puesto' => 'required|string|max:100',
            'area' => 'required|string|max:100',
            'zona_de_trabajo' => 'required|string|max:100',
            'num_de_vacantes' => 'required|integer',
            'nivel_del_puesto' => 'required|string|max:100',
            'tipoPuesto' => 'required|string|max:100',
            'salario' => 'required|string|max:100',
            'prestaciones' => 'required|string|max:100',
            'horarios' => 'required|string|max:100',
            'motivo_vacante' => 'required|string|max:100',
            'genero' => 'required|string|max:100',
            'rango_de_edad' => 'required|string|max:100',
            'estado_civil' => 'required|string|max:100',
            'apariencia' => 'required|string|max:100',
            'funciones' => 'required|string|max:100',
            'experiencia' => 'required|string|max:100',
            'habilidades' => 'required|string|max:100',
            'rasgos_personales' => 'required|string|max:100',
            'requisitos_adicionales' => 'nullable|string|max:100',
            'solicita' => 'required|string|max:100',
            'autoriza' => 'required|string|max:100',
            'estatus' => 'required|string|max:100',
        ]);

        vacantes::create($validated);

        return redirect()->route('vacantes.index')->with('success', 'Vacante creada con éxito.');
    }

    /**
     * Muestra una vacante específica.
     */
    public function show($id)
    {
        $vacante = vacantes::findOrFail($id);
        return view('vacantes.show', compact('vacante'));
    }

    /**
     * Muestra el formulario para editar una vacante.
     */
    public function edit($id)
    {
        $vacante = vacantes::findOrFail($id);
        return view('vacantes.edit', compact('vacante'));
    }

    /**
     * Actualiza una vacante en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'fecha_solicitud' => 'required|date',
            'puesto' => 'required|string|max:100',
            'area' => 'required|string|max:100',
            'zona_de_trabajo' => 'required|string|max:100',
            'num_de_vacantes' => 'required|integer',
            'nivel_del_puesto' => 'required|string|max:100',
            'tipoPuesto' => 'required|string|max:100',
            'salario' => 'required|string|max:100',
            'prestaciones' => 'required|string|max:100',
            'horarios' => 'required|string|max:100',
            'motivo_vacante' => 'required|string|max:100',
            'genero' => 'required|string|max:100',
            'rango_de_edad' => 'required|string|max:100',
            'estado_civil' => 'required|string|max:100',
            'apariencia' => 'required|string|max:100',
            'funciones' => 'required|string|max:100',
            'experiencia' => 'required|string|max:100',
            'habilidades' => 'required|string|max:100',
            'rasgos_personales' => 'required|string|max:100',
            'requisitos_adicionales' => 'nullable|string|max:100',
            'solicita' => 'required|string|max:100',
            'autoriza' => 'required|string|max:100',
            'estatus' => 'required|string|max:100',
        ]);

        $vacante = vacantes::findOrFail($id);
        $vacante->update($validated);

        return redirect()->route('vacantes.index')->with('success', 'Vacante actualizada con éxito.');
    }

    /**
     * Elimina una vacante de la base de datos.
     */
    public function destroy($id)
    {
        $vacante = vacantes::findOrFail($id);
        $vacante->delete();

        return redirect()->route('vacantes.index')->with('success', 'Vacante eliminada con éxito.');
    }
}
