<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Empresa;
use App\Ferramenta;
use Illuminate\Http\Request;
use App\Apr;
use App\Atividade;

class AtividadeController extends Controller
{
    /**
     * AtividadeController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $atividades = Atividade::ordeBy('atividade_apr', 'desc')->paginate(5);

        return view('atividade.index', ['atividade' => $atividades]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atividade.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['atividades'=>'required']);
        $atividade = new Atividade;
        $atividade->atividade = $request->input('atividade');
        $atividade->empresa_id = $request->input('empresa');
        $atividade->disciplina_id = $request->input('disciplina');
        $atividade->apr_id = $$request->input('apr_id');

        $atividade->save();

        $ferramentas = Ferramenta::all();



        $data = array(

            'atividade' => $atividade,
            'ferramentas' => $ferramentas
        );

        return view('atividade.associate')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atividade = Atividade::find($id);
        $empresa = Empresa::find($atividade->empresa_id);
        $disciplina = Disciplina::find($atividade->disciplina_id);
        $ferramentas = $atividade->Ferramentas;

        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas
        );

        return view('atividade.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atividade = Atividade::find($id);
        $empresa = Empresa::find($atividade->empresa_id);
        $disciplina = Disciplina::find($atividade->disciplina_id);
        $ferramentas = $atividade->Ferramentas;

        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas
        );

        return view('atividade.show')->with('data', $data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
