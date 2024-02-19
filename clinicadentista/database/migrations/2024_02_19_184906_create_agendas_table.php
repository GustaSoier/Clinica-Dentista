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
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idFuncionario');
            $table->dateTime('dataHoraAgenda');
            $table->enum('statusAgenda', ['Marcada', 'Cancelada', 'Realizada']);
            $table->text('observacoesAgenda')->nullable();
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
        Schema::dropIfExists('agendas');
    }
};
