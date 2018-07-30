<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impressao;
use PDF;

class ImpressaoController extends Controller
{
    //
    public function preImpressao($id){
        return $id;
    }
    public function geraPdf($id){
        $impressao = Impressao::find($id);

        $apr = $impressao->aprs;
        $user = $impressao->users;
        $area = $impressao->areas;
        $sesmt = $impressao->sesmts;
        $coordena = $impressao->coordenas;


        $naturezariscos = $apr->naturezasriscos;
        $checklist = $apr->checklists;
        $atividade = $apr->atividades;

        $data = array(
            'apr' => $apr,
            'naturezariscos' => $naturezariscos,
            'checklist' => $checklist,
            'atividade' => $atividade,
            'impressao'=>$impressao,
            'user'=>$user,
            'area'=>$area,
            'sesmt'=>$sesmt,
            'coordena'=>$coordena

        );

        //return view('impressao.tabelaHtml')->with(['data'=>$data]);

        $pdf = PDF::loadView('impressao.tabelaHtml', ['data'=>$data]);
        $pdf->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)->setOption('viewport-size','1280x1024')->setOption('encoding','utf-8');
        return $pdf->inline();
        

    }
}
