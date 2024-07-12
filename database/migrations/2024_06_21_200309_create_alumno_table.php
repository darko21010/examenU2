<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            
            $table->bigIncrements('nCodigo'); // Auto-increment y clave primaria
            $table->char('Apellido', 50)->nullable();
            $table->char('Nombre', 50)->nullable();
            $table->char('Curso', 50)->nullable();
            $table->decimal('Nota1', 6, 2);
            $table->decimal('Nota2', 6, 2);
            $table->decimal('Promedio', 6, 2);
            $table->string('Condicion', 50)->default('defaultRndValue');
            //$table->timestamps();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
};
