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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id('idConsulta');
            $table->unsignedBigInteger('idPaciente');
            $table->unsignedBigInteger('idFuncionario');
            $table->dateTime('dataConsulta');
            $table->text('observacoesConsulta')->nullable();
            $table->foreign('idPaciente')->references('idPaciente')->on('pacientes')->onDelete('cascade');
            $table->foreign('idFuncionario')->references('idFuncionario')->on('funcionarios')->onDelete('cascade');
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
        Schema::dropIfExists('consultas');
    }
};
