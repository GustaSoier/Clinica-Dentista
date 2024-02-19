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
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id('idPagamento');
            $table->unsignedBigInteger('idConsulta');
            $table->decimal('valorPagamento', 10, 2);
            $table->date('dataPagamento');
            $table->string('metodoPagamento', 50);
            $table->foreign('idConsulta')->references('idConsulta')->on('consultas')->onDelete('cascade');
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
        Schema::dropIfExists('pagamentos');
    }
};
