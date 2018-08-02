<?php

namespace App\Http\Controllers;

use App\Checklist;
use Auth;
use App\Sesmt;
use Illuminate\Http\Request;
use App\Impressao;
use App\Apr;
use App\Area;
use App\Coordena;
use App\Empresa;
use PDF;

class ImpressaoController extends Controller
{
    //
    public function preImpressao($id){
        $apr =$id;
        $areas = array();
        foreach (Area::all()as $ar){
            $areas[$ar->id] = $ar;
        }
        $sesmts = array();
        foreach (Sesmt::all() as $ses){
            $sesmts[$ses->id] = $ses;
        }
        $coordena = array();
        foreach (Coordena::all() as $coor){
            $coordena[$coor->id] = $coor;
        }
        $empresa = array();
        foreach (Empresa::all() as $emp){
            $empresa[$emp->id] = $emp;
        }



        $data = array(
            'apr'=>$apr,
            'areas'=>$areas,
            'sesmts'=>$sesmts,
            'coordenas'=>$coordena,
            'empresas'=>$empresa

        );

        return view('impressao.preImpressao')->with(['data'=>$data]);
    }
    public function store(Request $request){
        $this->validate($request,[
            'responsavel'=>'required',
            'telResponsavel'=>'required',
            'celula'=>'required',
            'area'=>'required',
            'sesmt'=>'required',
            'coordena'=>'required',
            'empresa'=>'required'
        ]);
        //return $request->input('apr');
        $impressao = new Impressao;
        //return var_dump(Auth::user());
        $impressao->responsavel = $request->input('responsavel');
        $impressao->telResponsavel = $request->input('telResponsavel');
        $impressao->celula = $request->input('celula');
        $impressao->apr = $request->input('apr');
        //$impressao->user = Auth::user()->id;
        $impressao->user =1;
        $impressao->area = $request->input('area');
        $impressao->sesmt = $request->input('sesmt');
        $impressao->coordena = $request->input('coordena');
        $impressao->empresa = $request->input('empresa');

        $impressao->save();

        return redirect('/pdf/'.$impressao->id);


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
        $checklists = Checklist::all();

        $data = array(
            'apr' => $apr,
            'naturezariscos' => $naturezariscos,
            'checklist' => $checklist,
            'atividade' => $atividade,
            'impressao'=>$impressao,
            'user'=>$user,
            'area'=>$area,
            'sesmt'=>$sesmt,
            'coordena'=>$coordena,
            'checklistsGeral'=>$checklists

        );

        //return view('impressao.tabelaHtml')->with(['data'=>$data]);

        $pdf = PDF::loadView('impressao.tabelaHtml', ['data'=>$data]);
        $pdf->setPaper('a4')->setOrientation('landscape')->setOption('margin-bottom', 0)->setOption('viewport-size','1280x1024')->setOption('encoding','utf-8');
        return $pdf->inline();
        

    }
}
