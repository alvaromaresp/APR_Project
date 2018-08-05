<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkAtividadeFerramenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atividade_ferramenta', function(Blueprint $table)
        {
            $table->integer('ferramenta_id')->unsigned()->change();
            $table->integer('atividade_id')->unsigned()->change();


            $table->foreign('ferramenta_id')->references('id')
                ->on('ferramentas')->onDelete('cascade');
            $table->foreign('atividade_id')->references('id')
                ->on('atividades')->onDelete('cascade');
            $table->primary(array('atividade_id', 'ferramenta_id'));
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
