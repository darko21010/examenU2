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
        //Alumno::create($request->validated());

        // Validar la solicitud
        $validated = $request->validated();

        // Calcular el promedio
        $nota1 = $validated['Nota1'];
        $nota2 = $validated['Nota2'];
        $promedio = ($nota1 + $nota2) / 2;    

        // Agregar el promedio a los datos validados
        $validated['Promedio'] = $promedio;

        // Determinar si el alumno está aprobado o desaprobado
        $condicion = $promedio >= 13.5 ? 'Aprobado' : 'Desaprobado';

         // Agregar el promedio y el estado a los datos validados
        $validated['Promedio'] = $promedio;
        $validated['Condicion'] = $condicion;

         // Crear el registro en la base de datos
        Alumno::create($validated);
        
        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente.');
    }

    public function edit($nCodigo) // FUNCION PARA EDITAR SEGUN ID
    {
        $alumnos = Alumno::findOrFail($nCodigo);
        return view('Alumnos.edit', compact('alumnos'));
    }

    public function update(CreateAlumnoRequest $request, $nCodigo) //ACTUALIZAR NOTA DE ALUMNO
    {
        //$alumnos = Alumno::findOrFail($nCodigo);
        //$alumnos->update($request->validated());

        $alumnos = Alumno::findOrFail($nCodigo);

        // Validar la solicitud
        $validated = $request->validated();

        // Calcular el promedio
        $nota1 = $validated['Nota1'];
        $nota2 = $validated['Nota2'];
        $promedio = ($nota1 + $nota2) / 2;

        // Determinar si el alumno está aprobado o desaprobado
        $condicion = $promedio >= 13.5 ? 'Aprobado' : 'Desaprobado';

        // Agregar el promedio y el estado a los datos validados
        $validated['Promedio'] = $promedio;
        $validated['Condicion'] = $condicion;

        // Actualizar el registro en la base de datos
        $alumnos->update($validated);

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente.');
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

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente.');
    }
}

