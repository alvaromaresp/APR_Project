<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disciplina = Disciplina::orderBy('disciplina', 'asc')->paginate(5);
        return view('disciplina.index')->with('disciplina',$disciplina);
    }

    public function search(Request $request){

        $disciplinas = Disciplina::where([
            ['disciplina', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(5);

        return view('disciplina.index')->with('disciplina',$disciplinas);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('disciplina.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['disciplina'=>'required']);
        $disciplina = new Disciplina;
        $disciplina->disciplina = $request->input('disciplina');
        $disciplina->save();

        return redirect('/disciplina')->with('success','Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $disciplina = Disciplina::find($id);
        return view('disciplina.show')->with('disciplina',$disciplina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disciplina = Disciplina::find($id);
        return view('disciplina.edit')->with('disciplina',$disciplina);
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
        $this->validate($request,['disciplina'=>'required']);
        $disciplina = Disciplina::find($id);
        $disciplina->disciplina = $request->input('disciplina');
        $disciplina->save();

        return redirect('/disciplina')->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disciplina = Disciplina::find($id);
        $disciplina->delete();

        return redirect('/disciplina')->with('danger','Removido com sucesso!');
    }
}
