<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkFerramentaRisco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ferramenta_riscos', function(Blueprint $table)
        {
            $table->integer('ferramenta_id')->unsigned()->change();
            $table->integer('riscos_id')->unsigned()->change();


            $table->foreign('ferramenta_id')->references('id')
                ->on('ferramentas')->onDelete('cascade');
            $table->foreign('riscos_id')->references('id')
                ->on('riscos')->onDelete('cascade');
            $table->primary(array('riscos_id', 'ferramenta_id'));
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
