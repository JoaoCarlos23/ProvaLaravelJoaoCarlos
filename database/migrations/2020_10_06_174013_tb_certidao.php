<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbCertidao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('certidao', function (Blueprint $table) {
            $table->id();
            $table->string('tipoCertidao');
            $table->string('envolvido1');
            $table->string('envolvido2');
            $table->string('dataCertidao');
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
