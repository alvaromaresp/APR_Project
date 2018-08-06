<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Naturezariscos;
use DB;

class naturezaRiscosController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('role:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nr = Naturezariscos::orderBy('natureza_risco', 'asc')->paginate(5);
        return view('naturezaRiscos.index')->with('nr', $nr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('naturezaRiscos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['natureza_risco' => 'required']);

        $nr = new Naturezariscos;
        $nr->natureza_risco = $request->input('natureza_risco');
        $nr->save();

        return redirect('/naturezaRiscos')->with('success', 'Sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nr = Naturezariscos::find($id);
        return view('naturezaRiscos.show')->with('nr', $nr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nr = Naturezariscos::find($id);

        return view('naturezaRiscos.edit')->with('nr', $nr);
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
        $this->validate($request, ['natureza_risco' => 'required']);

        $nr = Naturezariscos::find($id);
        $nr->natureza_risco = $request->input('natureza_risco');
        $nr->save();

        return redirect('/naturezaRiscos')->with('success', 'Atualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nr = Naturezariscos::find($id);

        $nr->delete();

        return redirect('/naturezaRiscos')->with('danger', 'Removido');
    }
}
