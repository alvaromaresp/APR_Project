<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableImpressao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('impressao', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps(); //data criacao(impressão)
            $table->integer('apr');//ex
            $table->integer('user');//ex
            $table->integer('area'); //ex
            $table->string('celula',200);
            $table->string('responsavel',200);
            $table->string('telResponsavel',200);
            $table->integer('sesmt');//ex
            $table->integer('coordena');//ex
            //ex = chave extrangeira
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
