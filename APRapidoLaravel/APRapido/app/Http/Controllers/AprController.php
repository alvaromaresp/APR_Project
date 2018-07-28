<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apr;
use App\Atividade;
use App\Checklist;
use App\Naturezariscos;
use App\Area;
use App\Empresa;
use App\User;
use App\Sesmt;
use App\Coordena;
use Auth;


class AprController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apr = Apr::orderBy('nome', 'desc')->paginate(5);

        return view('apr.index')->with('apr', $apr);

    }
    public function imprimir(){
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-L']);
        $mpdf->WriteHTML('<h1>Hello world!</h1>');
        $mpdf->Output();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresa = Empresa::all();
        $sesmt = Sesmt::all();
        $coordena = Coordena::all();
        $area = Area::all();

        $data = array(
            'empresa' => $empresa,
            'sesmt' => $sesmt,
            'coordena' => $coordena,
            'area' => $area
        );

        return view('apr.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nome'=>'required', 'telr'=>'required']);

        $apr = new Apr;
        $apr->data = date("Y-m-d H:i:s");
        $apr->nome = $request->input('nome');
        $apr->telr = $request->input('telr');
        $apr->save();

        $atividade = Atividade::all();

        $data = array(
            'apr' => $apr,
            'atividade' => $atividade
        );


        return view('apr.associateAtividade')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $apr = Apr::find($id);
        $naturezariscos = $apr->naturezasriscos;
        $checklist = $apr->checklists;
        $atividade = $apr->atividades;

        $data = array(
            'apr' => $apr,
            'naturezariscos' => $naturezariscos,
            'checklist' => $checklist,
            'atividade' => $atividade
        );

        return view('apr.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $apr = Apr::find($id);
        $data = array(
            'apr' => $apr,
        );

        return view('apr.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['nome'=>'required', 'telr'=>'required']);

        $apr = Apr::find($id);
        $apr->data = date("Y-m-d H:i:s");
        $apr->nome = $request->input('nome');
        $apr->telr = $request->input('telr');
        $apr->save();

        $atividade = Atividade::all();

        $data = array(
            'apr' => $apr,
            'atividade' => $atividade
        );


        return view('apr.associateAtividade')->with('data', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $apr = Apr::find($id);
        $apr->delete();

        $apr = Apr::orderBy('nome', 'desc')->paginate(5);

        return view('apr.index')->with('apr', $apr);
    }

    /**
     * Associate the specified resource to Atividade.
     *
     * @param Request $request
     * @param $id
     */
    public function associateAtividade(Request $request, $id)
    {
        $apr = Apr::find($id);
        $apr->atividades()->attach($request->input('atividade'));

        $atividade = Atividade::all();

        $data = array(

            'apr' => $apr,
            'atividade' => $atividade
        );

        return view('apr.associateAtividade')->with('data', $data);
    }

    /**
     * Desassociate the specified resource to Atividade.
     *
     * @param Request $request
     * @param $id
     */
    public function desassociateAtividade(Request $request, $id)
    {
        $apr = Apr::find($id);
        $apr->atividades()->detach($request->input('atividade'));

        $atividade = Atividade::all();

        $data = array(

            'apr' => $apr,
            'atividade' => $atividade
        );

        return view('apr.associateAtividade')->with('data', $data);
    }

    /**
     * Call Associate to Naturezariscos view.
     *
     * @param $id
     */
    public function associateNaturezariscosCall($id)
    {
        $apr = Apr::find($id);
        $naturezariscos = Naturezariscos::all();

        $data = array(
            'apr' => $apr,
            'naturezariscos' => $naturezariscos
        );

        return view('apr.associateNaturezariscos')->with('data', $data);
    }

    /**
     * Associate the specified resource to Naturezariscos.
     *
     * @param Request $request
     * @param $id
     */
    public function associateNaturezariscos(Request $request, $id)
    {
        $apr = Apr::find($id);
        $apr->naturezasriscos()->attach($request->input('naturezariscos'));

        $naturezariscos = Naturezariscos::all();

        $data = array(
            'apr' => $apr,
            'naturezariscos' => $naturezariscos
        );

        return view('apr.associateNaturezariscos')->with('data', $data);
    }

    /**
     * Desassociate the specified resource to Naturezariscos.
     *
     * @param Request $request
     * @param $id
     */
    public function desassociateNaturezariscos(Request $request, $id)
    {
        $apr = Apr::find($id);
        $apr->naturezasriscos()->detach($request->input('naturezariscos'));

        $naturezariscos = Naturezariscos::all();

        $data = array(
            'apr' => $apr,
            'naturezariscos' => $naturezariscos
        );

        return view('apr.associateNaturezariscos')->with('data', $data);
    }

    /**
     * Call Associate to Checklist view.
     *
     * @param Request $request
     * @param $id
     */
    public function associateChecklistCall(Request $request, $id)
    {
        $apr = Apr::find($id);
        $checklist = Checklist::all();

        foreach($checklist as $cl){
            if(!$apr->checklists->contains($cl)){
                $apr->checklists()->save($cl, ['checado' => 0]);
            }
        }

        $checklist = $apr->checklists;

        $data = array(
            'apr' => $apr,
            'checklist' => $checklist
        );


        return view('apr.associateChecklist')->with('data', $data);
    }

    /**
     * Associate the specified resource to Checklist.
     *
     * @param Request $request
     * @param $id
     */
    public function associateChecklist(Request $request, $id)
    {
        $apr = Apr::find($id);
        $check = Checklist::find($request->input('checklist'));
        $apr->checklists()->updateExistingPivot($check, ['checado' => 1]);

        $checklist = $apr->checklists;

        $data = array(
            'apr' => $apr,
            'checklist' => $checklist
        );

        return view('apr.associateChecklist')->with('data', $data);
    }

    /**
     * Desassociate the specified resource to Checklist.
     *$request->input('area');
     * @param Request $request
     * @param $id
     */
    public function desassociateChecklist(Request $request, $id)
    {
        $apr = Apr::find($id);
        $check = Checklist::find($request->input('checklist'));
        $apr->checklists()->updateExistingPivot($check, ['checado' => 0]);

        $checklist = $apr->checklists;

        $data = array(
            'apr' => $apr,
            'checklist' => $checklist
        );

        return view('apr.associateChecklist')->with('data', $data);
    }

    public function showAPRbyLog ($id){
         $apr = Apr::find($id);

         return view('apr.newAPRbyLog')->with('data', $apr);

    }


    public function newAPRbyLog (Request $request, $id){
         $apr = Apr::find($id);
         $this->validate($request,['telr'=>'required', 'empresa'=>'required', 'sesmt'=>'required', 'coordena'=>'required']);

         $aprNew = new Apr;

         $aprNew->nome = $apr->nome;
         $aprNew->celula = $apr->celula;
         $aprNew->area_id = $apr->area_id;
         $aprNew->checklists = $apr->checklists;
         $aprNew->atividade = $apr->atividades;
         $aprNew->naturezasriscos = $apr->naturezasriscos;

         $aprNew->data = date("Y-m-d H:i:s");
         $aprNew->telr = $request->input('telr');
         $aprNew->empresa_id = $request->input('empresa');
         $aprNew->user_id = 1;
         $aprNew->sesmt_id = $request->input('sesmt');
         $aprNew->coordena_id = $request->input('coordena');


         $aprNew->save();

         return view('apr.newAPRbyLog');
    }


}
