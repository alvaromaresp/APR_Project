<?php

namespace App\Http\Controllers;
use App\Naturezariscos;

use Illuminate\Http\Request;
use Illuminate\View\View;

class NaturezaDeRiscosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naturezaRiscos  = Naturezariscos::all();
        return view('naturezaRiscos.index')->with('naturezaRiscos',$naturezaRiscos);
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
        $natureza_risco = $request->naturezaRisco;
        $naturezaRiscos = new Naturezariscos;
        $naturezaRiscos->natureza_risco = $natureza_risco;
        $naturezaRiscos->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $naturezaRisco = Naturezariscos::find($id);
        return view('naturezaRiscos.show')->with('naturezaRisco',$naturezaRisco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $naturezaRisco = Naturezariscos::find($id);
        return view('naturezaRiscos.edit')->with('naturezaRisco',$naturezaRisco);
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
