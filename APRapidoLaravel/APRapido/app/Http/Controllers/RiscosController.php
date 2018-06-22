<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riscos;


class RiscosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riscos = Riscos::orderBy('risco','asc')->paginate(5);
        return view('riscos.index')->with('riscos',$riscos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riscos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['risco'=>'required']);
        $risco = new Risco;
        $risco->risco = $request->input('risco');
        $risco->save();

        return redirect('/associate');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $risco = Risco::find($id);
        return view('riscos.show')->with('risco',$risco);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $risco = Risco::find($id);
        return view('riscos.edit')->with('risco',$risco);
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
        $this->validate($request,['risco'=>required]);

        $risco = Risco::find($id);
        $risco->risco = $request->input('risco');
        $risco->save();

        // RETURN AQUI
        return redirect('/riscos');
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
