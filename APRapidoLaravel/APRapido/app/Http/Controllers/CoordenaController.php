<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coordena;

class CoordenaController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('role:user');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){

        $coordenas = Coordena::where([
            ['nome', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(5);

        return view('coordena.index')->with('coordena',$coordenas);

    }

    public function index()
    {
        $coordena = Coordena::orderBy('nome', 'asc')->paginate(5);
        return view('coordena.index')->with('coordena',$coordena);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coordena.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nome'=>'required', 'telefone'=>'required']);
        $coordena = new Coordena;
        $coordena->nome = $request->input('nome');
        $coordena->telefone = $request->input('telefone');
        $coordena->save();

        return redirect('/coordena')->with('success','Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coordena = Coordena::find($id);
        return view('coordena.show')->with('coordena',$coordena);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $coordena = Coordena::find($id);
        return view('coordena.edit')->with('coordena',$coordena);
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
        $this->validate($request,['nome'=>'required', 'telefone'=>'required']);
        $coordena = Coordena::find($id);
        $coordena->nome = $request->input('nome');
        $coordena->telefone = $request->input('telefone');
        $coordena->save();

        return redirect('/coordena')->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coordena = Coordena::find($id);
        $coordena->delete();

        return redirect('/coordena')->with('danger','Removido com sucesso!');
    }
}
