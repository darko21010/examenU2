<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas = [
            [
                'cPerApellido' => 'Gonzalez',
                'cPerNombre' => 'Santiago',
                'cPerDireccion' => 'Calle Falsa 123',
                'dPerFecNac' => '1992-01-15',
                'nPerEdad' => 32,
                'nPerSueldo' => 4500.75,
                'cPerRnd' => 'abc789xyz',
                'nPerEstado' => '1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cPerApellido' => 'Perez',
                'cPerNombre' => 'Juan',
                'cPerDireccion' => 'Av. Siempre Viva 456',
                'dPerFecNac' => '1985-05-10',
                'nPerEdad' => 36,
                'nPerSueldo' => 3500.00,
                'cPerRnd' => 'xyz123abc',
                'nPerEstado' => '1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cPerApellido' => 'Ramirez',
                'cPerNombre' => 'Luis',
                'cPerDireccion' => 'Boulevard Sol 789',
                'dPerFecNac' => '1990-08-22',
                'nPerEdad' => 31,
                'nPerSueldo' => 3800.25,
                'cPerRnd' => 'lmn456opq',
                'nPerEstado' => '1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cPerApellido' => 'Lopez',
                'cPerNombre' => 'Ana',
                'cPerDireccion' => 'Calle Luna 101',
                'dPerFecNac' => '1995-02-25',
                'nPerEdad' => 26,
                'nPerSueldo' => 4100.50,
                'cPerRnd' => 'uvw789rst',
                'nPerEstado' => '1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cPerApellido' => 'Fernandez',
                'cPerNombre' => 'Carlos',
                'cPerDireccion' => 'Av. Estrella 202',
                'dPerFecNac' => '1998-11-11',
                'nPerEdad' => 23,
                'nPerSueldo' => 3000.75,
                'cPerRnd' => 'opq123lmn',
                'nPerEstado' => '1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cPerApellido' => 'Diaz',
                'cPerNombre' => 'Sara',
                'cPerDireccion' => 'Calle Mar 303',
                'dPerFecNac' => '1993-07-19',
                'nPerEdad' => 28,
                'nPerSueldo' => 4200.50,
                'cPerRnd' => 'rst789uvw',
                'nPerEstado' => '1',
                'remember_token' => null,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        foreach ($personas as $persona) {
            Persona::create($persona);
        }
    }
}
