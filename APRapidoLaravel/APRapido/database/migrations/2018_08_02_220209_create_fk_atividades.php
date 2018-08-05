<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkAtividades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('atividades', function(Blueprint $table)
        {
            $table->integer('empresa_id')->unsigned()->change();
            $table->integer('disciplina_id')->unsigned()->change();


            $table->foreign('empresa_id')->references('id')
                ->on('empresas')->onDelete('cascade');
            $table->foreign('disciplina_id')->references('id')
                ->on('disciplinas')->onDelete('cascade');
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
