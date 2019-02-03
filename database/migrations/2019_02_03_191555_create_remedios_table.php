<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRemediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remedios', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('qtd_Estoque');
            $table->string('nome_remedio');
            $table->string('tipo');
            $table->string('data_de_vencimento');
            $table->string('data_de_fabricacao');
            $table->string('dia_de_chegada');

            $table->timestamps();
        });

        Schema::table('remedios', function (Blueprint $table)
        {
          $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remedios');
    }
}
