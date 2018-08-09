<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TornarNomesDasTabelasUnicos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('riscos', function (Blueprint $table) {
            $table->string('risco',191)->unique()->change();
        });


        Schema::table('naturezariscos', function (Blueprint $table) {
            $table->string('natureza_risco',191)->unique()->change();
        });


        Schema::table('medidaspreventivas', function (Blueprint $table) {
            $table->string('medidapreventiva',191)->unique()->change();
        });

        Schema::table('ferramentas', function (Blueprint $table) {
            $table->string('ferramenta',191)->unique()->change();
        });


        Schema::table('empresas', function (Blueprint $table) {
            $table->string('empresa',191)->unique()->change();
        });


        Schema::table('disciplinas', function (Blueprint $table) {
            $table->string('disciplina',191)->unique()->change();
        });
        Schema::table('atividades', function (Blueprint $table) {
            $table->string('atividade',191)->unique()->change();
        });






        Schema::table('checklists', function (Blueprint $table) {
            $table->string('item',191)->unique()->change();
        });

        $tabelas = array('aprs','areas','coordenas','sesmts','users');
        foreach ($tabelas as $tab) {
            Schema::table($tab, function (Blueprint $table) {
                $table->string('nome',191)->unique()->change();
            });
        }
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
