<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAprsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aprs', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data');
            $table->string('nome',200);
            $table->string('celula',200);
            $table->string('telr',200);
            $table->timestamps();

            $table->integer('empresa_id');
            $table->integer('user_id');
            $table->integer('user_empresa_id');
            $table->integer('sesmt_id');
            $table->integer('coordena_id');
            $table->integer('area_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aprs');
    }
}
