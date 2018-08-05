<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkAtividadeApr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atividade_apr', function(Blueprint $table)
        {
            $table->integer('apr_id')->unsigned()->change();
            $table->integer('atividade_id')->unsigned()->change();


            $table->foreign('apr_id')->references('id')
                ->on('aprs')->onDelete('cascade');
            $table->foreign('atividade_id')->references('id')
                ->on('atividades')->onDelete('cascade');
            $table->primary(array('apr_id', 'atividade_id'));
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
