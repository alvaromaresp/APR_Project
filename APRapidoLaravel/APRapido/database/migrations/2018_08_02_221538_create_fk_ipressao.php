<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFkIpressao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('impressao', function(Blueprint $table)
        {
            $table->integer('apr')->unsigned()->change();
            $table->integer('user')->unsigned()->change();
            $table->integer('area')->unsigned()->change();
            $table->integer('sesmt')->unsigned()->change();
            $table->integer('coordena')->unsigned()->change();
            $table->integer('empresa')->unsigned()->change();


            $table->foreign('apr')->references('id')
                ->on('aprs')->onDelete('cascade');
            $table->foreign('user')->references('id')
                ->on('users')->onDelete('cascade');
            $table->foreign('area')->references('id')
                ->on('areas')->onDelete('cascade');
            $table->foreign('sesmt')->references('id')
                ->on('sesmts')->onDelete('cascade');
            $table->foreign('coordena')->references('id')
                ->on('coordenas')->onDelete('cascade');
            $table->foreign('empresa')->references('id')
                ->on('empresas')->onDelete('cascade');

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
