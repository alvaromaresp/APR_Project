<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
//Migration para corrigir cagada do Gordo
class RenameAtividadeEmpresaDisciplinaAreaFerramentaWithSAtEnd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::rename('atividade','atividades');
        Schema::rename('empresa','empresas');
        Schema::rename('disciplina','disciplinas');
        Schema::rename('area','areas');
        Schema::rename('ferramenta','ferramentas');
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
