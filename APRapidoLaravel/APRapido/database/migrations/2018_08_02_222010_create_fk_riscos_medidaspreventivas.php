<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkRiscosMedidaspreventivas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('riscos_medidaspreventivas', function(Blueprint $table)
        {
            $table->integer('medidapreventiva_id')->unsigned()->change();
            $table->integer('risco_id')->unsigned()->change();


            $table->foreign('medidapreventiva_id')->references('id')
                ->on('medidaspreventivas')->onDelete('cascade');
            $table->foreign('risco_id')->references('id')
                ->on('riscos')->onDelete('cascade');
            $table->primary(array('risco_id', 'medidapreventiva_id'));
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
