<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    // Definir la tabla asociada al modelo
    protected $alumno = 'alumno';

    // Definir los campos que pueden ser asignados masivamente
    protected $fillable = [
        'Apellido',
        'Nombre',
        'Curso',
        'Nota1',
        'Nota2',
        'Promedio',
        'Condicion',
        'created_at',
        'updated_at',
    ];

    // Desactivar las marcas de tiempo si no se usan
    public $timestamps = true;

    // Definir la clave primaria personalizada
    protected $primaryKey = 'nCodigo';
}