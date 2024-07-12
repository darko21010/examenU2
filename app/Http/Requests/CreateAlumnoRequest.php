<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'Apellido' => 'required|string|max:50',
            'Nombre' => 'required|string|max:50',
            'Curso' => 'required|string|max:100',
            'Nota1' => 'required|numeric',
            'Nota2' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'Apellido.required' => 'El apellido es obligatorio.',
            'Nombre.required' => 'El nombre es obligatorio.',
            'Curso.required' => 'El curso es obligatorio.',
            'Nota1.required' => 'La Nota 1 es obligatoria.',
            'Nota2.required' => 'La Nota 2 es obligatoria.',
        ];
    }
}
