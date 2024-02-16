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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('idPaciente');
            $table->string('nomePaciente', 100);
            $table->string('emailPaciente', 100);
            $table->string('cpfPaciente', 14);
            $table->date('data_nascimentoPaciente');
            $table->date('dataRegistroPaciente');
            $table->string('enderecoPaciente', 255);
            $table->string('telefonePaciente', 20);
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
        Schema::dropIfExists('pacientes');
    }
};
