<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Alumno;

use App\Http\Requests\CreateAlumnoRequest;


class AlumnoController extends Controller
{
    public function index() // FUNCION PARA LA LISTA DE ALUMNOS
    {
        $alumnos = Alumno::all();
        return view('alumnos.index', compact('alumnos'));
    }

    public function showOptions() //FUNCION PARA EL MENU DE OPCIONES DE ALUMNOS
    {
        return view('alumnos.options');
    }

    public function create() //FUNCION PARA CREAR NUEVO ALUMNO
    {
        return view('alumnos.create');
    }

    public function store(CreateAlumnoRequest $request) // VA DE LA MANO PARA CREAR NUEVO ALUMNO
    {
        Alumno::create($request->validated());

        return redirect()->route('alumno.index')->with('success', 'Alumno creado correctamente.');
    }

    public function edit($nPerCodigo) // FUNCION PARA EDITAR SEGUN ID
    {
        $persona = Alumno::findOrFail($nPerCodigo);
        return view('personas.edit', compact('persona'));
    }

    public function update(CreateAlumnoRequest $request, $nPerCodigo)
    {
        $persona = Alumno::findOrFail($nPerCodigo);
        $persona->update($request->validated());

        return redirect()->route('personas.index')->with('success', 'Persona actualizada correctamente.');
    }
    
    public function findForEdit(Request $request)
    {
        $validated = $request->validate([
            'nPerCodigo' => 'required|integer|exists:persona,nPerCodigo',
        ]);

        return redirect()->route('personas.edit', $validated['nPerCodigo']);
    }

    public function destroy($nPerCodigo)
    {
        $persona = Alumno::findOrFail($nPerCodigo);
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'Persona eliminada correctamente.');
    }
}

