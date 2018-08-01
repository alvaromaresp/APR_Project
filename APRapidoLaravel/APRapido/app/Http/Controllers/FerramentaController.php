<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ferramenta;
use App\Disciplina;
use App\Riscos;

class FerramentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ferramenta = Ferramenta::orderBy('ferramenta','asc')->paginate(5);
        return view('ferramenta.index')->with('ferramenta',$ferramenta);
    }

    public function search(Request $request){

        $ferramentas = Ferramenta::where([
            ['ferramenta', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(5);

        return view('ferramenta.index')->with('ferramenta',$ferramentas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplina = Disciplina::all();
        return view('ferramenta.create')->with('disciplina', $disciplina);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['ferramenta'=>'required']);
        $ferramenta = new Ferramenta;
        $ferramenta->ferramenta = $request->input('ferramenta');
        $ferramenta->disciplina_id = $request->input('disciplina');
        $ferramenta->save();
        
        
        $riscos = Riscos::all();

        $data = array(
            'ferramenta' => $ferramenta,
            'riscos' => $riscos
        );

        return view('ferramenta.associate')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ferramenta = Ferramenta::find($id);
        $riscos = $ferramenta->riscos;
        $disciplina = Disciplina::find($ferramenta->disciplina_id);

        $data = array(
            'ferramenta' => $ferramenta,
            'riscos' => $riscos,
            'disciplina' => $disciplina
        );
        return view('ferramenta.show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ferramenta = Ferramenta::find($id);
        $disciplina = Disciplina::all();

        $data = array(
            'ferramenta' => $ferramenta,
            'disciplina' => $disciplina
        );
        return view('ferramenta.edit')->with('data', $data);
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
        $this->validate($request,['ferramenta'=>'required']);

        $ferramenta = Ferramenta::find($id);
        $ferramenta->ferramenta = $request->input('ferramenta');
        $ferramenta->save();

        $riscos = Riscos::all();

        $data = array(
            'ferramenta' => $ferramenta,
            'riscos' => $riscos
        );

        return view('ferramenta.associate')->with('data', $data);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ferramenta = Ferramenta::find($id);
        $ferramenta->delete();

        $ferramenta = Ferramenta::orderBy('ferramenta','asc')->paginate(5);

        return view('ferramenta.index')->with('ferramenta', $ferramenta);
    }

    /**
     * Associate Ferramenta to Riscos
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function associate(Request $request, $id){
        $ferramenta = Ferramenta::find($id);
        $ferramenta->riscos()->attach($request->input('risco'));

        $riscos = Riscos::all();

        $data = array(
            'ferramenta' => $ferramenta,
            'riscos' => $riscos
        );

        return view('ferramenta.associate')->with('data', $data);
    }

    /**
     * Desassociate Ferramenta to ferramentas
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function desassociate(Request $request, $ferramenta){

        $ferramenta = Ferramenta::find($ferramenta);
        $ferramenta->riscos()->detach($request->input('risco'));

        $riscos = Riscos::all();

        $data = array(
            'ferramenta' => $ferramenta,
            'riscos' => $riscos
        );

        return view('ferramenta.associate')->with('data', $data);
    }
}
