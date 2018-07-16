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
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $atividades = Atividade::orderBy('atividade', 'desc')->paginate(5);

        return view('atividade.index')->with('atividades', $atividades);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $emp = Empresa::all();
        $dis = Disciplina::all();

        $data = array(
            'empresa' => $emp,
            'disciplina' => $dis
        );
        return view('atividade.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['atividade'=>'required']);
        $atividade = new Atividade;
        $atividade->atividade = $request->input('atividade');
        $atividade->empresa_id = $request->input('empresa');
        $atividade->disciplina_id = $request->input('disciplina');
        $atividade->data = date("Y-m-d H:i:s");
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
        $ferramenta = $atividade->Ferramentas;

        $data = array(
            'atividade' => $atividade,
            'ferramenta' => $ferramenta,
            'disciplina' => $disciplina,
            'empresa' => $empresa
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
        $empresa = Empresa::all();
        $disciplina = Disciplina::all();

        $data = array(
            'atividade' => $atividade,
            'empresa' => $empresa,
            'disciplina' => $disciplina,
        );

        return view('atividade.edit')->with('data', $data);
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

        $this->validate($request, ['atividade' => 'required']);

        $atividade = Atividade::find($id);
        $atividade->atividade = $request->input('atividade');
        $atividade->empresa_id = $request->input('empresa');
        $atividade->disciplina_id = $request->input('disciplina');

        $atividade->save();

        $ferramenta = Ferramenta::all();

        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramenta
        );

        return view('atividade.associate')->with('data', $data);
    }
     /**
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atividade = Atividade::find($id);
        $atividade->delete();

        $atividades = Atividade::orderBy('atividade', 'desc')->paginate(5);

        return view('atividade.index')->with('atividades', $atividades);
    }

        /**
         * Associate Atividades to Request
         * @param Request $request
         * @param $id
         */
    public function associate(Request $request, $id){

        $atividade = Atividade::find($id);
        $atividade->ferramentas()->attach($request->input('ferramenta'));

        $ferramenta = Ferramenta::all();

        $data = array(

            'atividade' => $atividade,
            'ferramentas' => $ferramenta
        );

        return view('atividade.associate')->with('data', $data);

    }


        /**
         * @param Request $request
         * @param $atividade
         */
    public function desassociate(Request $request, $id){

        $atividade = Atividade::find($id);
        $atividade->ferramentas()->detach($request->input('ferramenta'));

        $ferramenta = Ferramenta::all();

        $data = array(

            'atividade' => $atividade,
            'ferramentas' => $ferramenta
        );

        return view('atividade.associate')->with('data', $data);
    }
















}
