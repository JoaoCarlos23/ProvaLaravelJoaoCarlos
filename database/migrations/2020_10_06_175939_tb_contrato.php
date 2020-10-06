<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbContrato extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('contrato', function (Blueprint $table) {
            $table->id();
            $table->string('tipoContrato');
            $table->string('envolvido1');
            $table->string('envolvido2');
            $table->string('dataContrato');
            $table->double('valor_total',8,2);
            $table->foreignId('nome_tabeliao');
            $table->foreign('nome_tabeliao')->references('id')->on('tabeliao');


        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
