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
    //
    public function __construct()
    {
        $this->middleware('role:user');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($modal = false)
    {


        $atividades = Atividade::orderBy('atividade', 'desc')->paginate(5);

        if($modal){
            return 'Fechar';   
        }
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
            'disciplina' => $dis,
        );
        return view("atividade.create")->with('data', $data);
    }
    /**
     * Show the form for creating a new resource. (modal)
     *
     * @return \Illuminate\Http\Response
     */
    public function createModal()
    {

        $emp = Empresa::all();
        $dis = Disciplina::all();

        $data = array(
            'empresa' => $emp,
            'disciplina' => $dis,
        );
        return view("atividade.modal.create")->with('data', $data);
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

        $disciplina = Disciplina::find($request->input('disciplina'));
        $ferramentas = $disciplina->ferramentas;

        $redirect = $request->input('redirect') ?? "/atividades/associate/";


        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas,
        );

        return redirect($redirect.$atividade->id)->with('data', $data);
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
    public function edit($id, $modal = "false")
    {
        $atividade = Atividade::find($id);
        $empresa = Empresa::all();
        $disciplina = Disciplina::all();

        $data = array(
            'atividade' => $atividade,
            'empresa' => $empresa,
            'disciplina' => $disciplina,
            'modal' => $modal
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
        
        $disciplina = Disciplina::find($request->input('disciplina'));
        $ferramentas = $disciplina->ferramentas;

        $atividade->save();

        $modal = $request->input('modal');

        $ferramenta = Ferramenta::all();

        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas,
            'modal' => $modal
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

        return redirect('/atividade')->with('success','Removido com sucesso!');
    }

        /**
         * Associate Atividades to Request
         * @param Request $request
         * @param $id
         */
    public function associate($id){

        $atividade = Atividade::find($id);
        $ferramentas = Ferramenta::all();



        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas,
        );

        return view('atividade.associate')->with('data', $data);

    }
    /**
     * Associate Atividades to Request
     * @param Request $request
     * @param $id
     */
    public function associateModal($id){

        $atividade = Atividade::find($id);
        $ferramentas = Ferramenta::all();



        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas,

        );

        return view('atividade.modal.associate')->with('data', $data);

    }
    public function associateStore(Request $request, $id){

        $atividade = Atividade::find($id);
        $atividade->ferramentas()->attach($request->input('ferramenta'));

        $disciplina = Disciplina::find($atividade->disciplina_id);
        $ferramentas = $disciplina->ferramentas;

        $redirect = $request->input('redirect') ?? "/atividades/associate/";

        $data = array(
            'atividade' => $atividade,
            'ferramentas' => $ferramentas,
        );

        return redirect($redirect.$atividade->id)->with('data', $data);

    }


        /**
         * @param Request $request
         * @param $atividade
         */
    public function desassociate(Request $request, $id){

        $atividade = Atividade::find($id);
        $atividade->ferramentas()->detach($request->input('ferramenta'));

        $disciplina = Disciplina::find($atividade->disciplina_id);
        $ferramentas = $disciplina->ferramentas;

        $redirect = $request->input('redirect') ?? "/atividades/associate/";

        $data = array(

            'atividade' => $atividade,
            'ferramentas' => $ferramentas,
        );

        return redirect($redirect.$atividade->id)->with('data', $data);
    }
















}
