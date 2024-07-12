<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alumno = [
            [
                'Apellido' => 'Gonzalez',
                'Nombre' => 'Santiago',
                'Curso' => 'Fisica',
                'Nota1' => 12,
                'Nota2' => 18,
                'Promedio' => 15,
                'Condicion' => 'Aprobado',
                //'FechaRegistro' => '1992-01-15'
                'created_at' => now(),
                'updated_at' => now(),
                
            ],
            [
                'Apellido' => 'Perez',
                'Nombre' => 'Juan',
                'Curso' => 'Aritmetica',
                'Nota1' => 15,
                'Nota2' => 18,
                'Promedio' => 16.5,
                'Condicion' => 'Aprobado',
                //'FechaRegistro' => '1992-01-15'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Apellido' => 'Vargas',
                'Nombre' => 'Baltodano',
                'Curso' => 'Algebra',
                'Nota1' => 11,
                'Nota2' => 12,
                'Promedio' => 11.5,
                //'FechaRegistro' => '1992-01-15'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Apellido' => 'Caranza',
                'Nombre' => 'Orinson',
                'Curso' => 'Literatura',
                'Nota1' => 10,
                'Nota2' => 20,
                'Promedio' => 15,
                'Condicion' => 'Aprobado',
                //'FechaRegistro' => '1992-01-15'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Apellido' => 'Yengle',
                'Nombre' => 'Diego',
                'Curso' => 'Lenguaje',
                'Nota1' => 20,
                'Nota2' => 5,
                'Promedio' => 16.5,
                'Condicion' => 'Aprobado',
                //'FechaRegistro' => '1992-01-15'
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'Apellido' => 'Ramos',
                'Nombre' => 'Diego',
                'Curso' => 'Ingles',
                'Nota1' => 10,
                'Nota2' => 9,
                'Promedio' => 9.5,
                'Condicion' => 'Aprobado',
                //'FechaRegistro' => '1992-01-15'
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($alumno as $alumno) {
            Alumno::create($alumno);
        }
    }
}

