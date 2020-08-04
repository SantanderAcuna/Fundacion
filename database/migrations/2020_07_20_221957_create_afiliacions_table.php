<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliacions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo_id')->unsigned();
            $table->string('cedula');
            $table->string('nombre');
            $table->string('p_apellidos');
            $table->string('s_apellidos');
            $table->string('direccion');
            $table->bigInteger('barrio_id')->unsigned();
            $table->string('telefono');
            $table->string('email');
            $table->bigInteger('eps_id')->unsigned();
            $table->foreign('barrio_id')->references('id')->on('barrios');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('eps_id')->references('id')->on('eps');
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
        Schema::dropIfExists('afiliacions');
    }
}
