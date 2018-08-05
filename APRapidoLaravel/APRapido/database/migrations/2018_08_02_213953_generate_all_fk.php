<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GenerateAllFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apr_checklists', function(Blueprint $table)
        {
            $table->integer('apr_id')->unsigned()->change();
            $table->integer('checklist_id')->unsigned()->change();


            $table->foreign('apr_id')->references('id')
                ->on('aprs')->onDelete('cascade');
            $table->foreign('checklist_id')->references('id')
            ->on('checklists')->onDelete('cascade');
            $table->primary(array('apr_id', 'checklist_id'));
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
