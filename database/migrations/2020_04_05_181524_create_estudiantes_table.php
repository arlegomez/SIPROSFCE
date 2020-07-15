<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            #$table->increments('id');
            $table->string('carne')->unique()->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('edad');
            $table->string('dui')->unique();
            $table->string('direccionActual');
            $table->string('direccionElectronica');
            $table->string('telefonoFijoMovil');
            $table->string('codigo')->foreing()->references('codigo')->on('carreras')->onDelete('cascade');
            $table->integer('sexo_id')->unsigned()->foreing()->references('id')->on('sexo')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
