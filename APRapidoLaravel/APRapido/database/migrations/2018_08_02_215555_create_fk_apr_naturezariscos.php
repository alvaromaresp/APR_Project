<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkAprNaturezariscos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apr_naturezariscos', function(Blueprint $table)
        {
            $table->integer('apr_id')->unsigned()->change();
            $table->integer('naturezariscos_id')->unsigned()->change();


            $table->foreign('apr_id')->references('id')
                ->on('aprs')->onDelete('cascade');
            $table->foreign('naturezariscos_id')->references('id')
                ->on('naturezariscos')->onDelete('cascade');
            $table->primary(array('apr_id', 'naturezariscos_id'));
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
