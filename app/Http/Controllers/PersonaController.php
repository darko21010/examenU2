<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.options', compact('personas'));
    }

    public function show()
    {
        return view('personas.show');
    }

    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        // Validar la solicitud
        $request->validate([
            'cPerApellido' => 'required|string|max:50',
            'cPerNombre' => 'required|string|max:50',
            'cPerDireccion' => 'required|string|max:100',
            'dPerFecNac' => 'required|date',
            'nPerEdad' => 'required|integer',
            'nPerSueldo' => 'required|numeric',
            'nPerEstado' => 'required|in:0,1'
        ]);

        // Guardar en la base de datos
        Persona::create($request->all());

        return redirect()->route('personas.index')->with('success', 'Persona creada correctamente.');
    }
    
}