<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacantes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('fecha_solicitud');
            $table->string('puesto', 100);
            $table->string('area', 100);
            $table->string('zona_de_trabajo', 100);
            $table->integer('num_de_vacantes');
            $table->string('nivel_del_puesto', 100);
            $table->string('tipoPuesto', 100);
            $table->string('salario', 100);
            $table->string('prestaciones', 100);
            $table->string('horarios', 100);
            $table->string('motivo_vacante', 100);
            $table->string('genero', 100);
            $table->string('rango_de_edad', 100);
            $table->string('estado_civil', 100);
            $table->string('apariencia', 100);
            $table->string('funciones', 100);
            $table->string('experiencia', 100);
            $table->string('sector_empresarial',100);
            $table->string('habilidades', 100);
            $table->string('rasgos_personales', 100);
            $table->string('requisitos_adicionales', 100);
            $table->string('solicita', 100);
            $table->string('autoriza', 100);
            $table->string('estatus', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacantes');
    }
}
