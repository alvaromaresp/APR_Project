<?php

namespace App\Http\Controllers;


use App\Medidaspreventivas;
use Illuminate\Http\Request;

class MedidaPreventivaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medidasPreventivas = Medidaspreventivas::all();
        return view('medidasPreventivas.index')->with('medidasPreventivas',$medidasPreventivas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medidasPreventivas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['medidapreventiva'=>'required']);
        $medidaPreventiva = new Medidaspreventivas;
        $medidaPreventiva->medidapreventiva = $request->input('medidapreventiva');
        $medidaPreventiva->save();

        return redirect('/medidaPreventiva')->with('success','Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medidaPreventiva = Medidaspreventivas::find($id);
        return view('medidasPreventivas.show')->with('medidasPreventivas',$medidaPreventiva);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medidaPreventiva = Medidaspreventivas::find($id);
        return view('medidasPreventivas.edit')->with('medidasPreventivas',$medidaPreventiva);
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
        $this->validate($request,['medidapreventiva'=>'required']);
        $medidaPreventiva = Medidaspreventivas::find($id);
        $medidaPreventiva->medidapreventiva = $request->input('medidapreventiva');
        $medidaPreventiva->save();

        return redirect('/medidaPreventiva')->with('success','Atualizado com sucesso!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medidaPreventiva = Medidaspreventivas::find($id);
        $medidaPreventiva->delete();

        return redirect('/medidaPreventiva')->with('danger','Removido com sucesso!');
    }
}
