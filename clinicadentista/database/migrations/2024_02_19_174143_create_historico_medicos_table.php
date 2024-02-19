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
        Schema::create('historico_medico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idPaciente');
            $table->dateTime('dataAtendimento');
            $table->string('procedimentoRealizado', 255);
            $table->text('observacoesHistoricoMedico')->nullable();
            $table->foreign('idPaciente')->references('idPaciente')->on('pacientes')->onDelete('cascade');
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
        Schema::dropIfExists('historico_medicos');
    }
};
