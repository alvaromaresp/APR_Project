<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sesmt;  

class SesmtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sesmt = Sesmt::orderBy('nome', 'asc')->paginate(5);
        return view('sesmt.index')->with('sesmt',$sesmt);
    }
    public function search(Request $request){

        $sesmts = Sesmt::where([
            ['nome', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(5);

        return view('sesmt.index')->with('sesmt',$sesmts);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sesmt.create');
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
        $sesmt = new Sesmt;
        $sesmt->nome = $request->input('nome');
        $sesmt->telefone = $request->input('telefone');
        $sesmt->save();

        return redirect('/sesmt')->with('success','Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sesmt = Sesmt::find($id);
        return view('sesmt.show')->with('sesmt',$sesmt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sesmt = Sesmt::find($id);
        return view('sesmt.edit')->with('sesmt',$sesmt);
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
        $sesmt = Sesmt::find($id);
        $sesmt->nome = $request->input('nome');
        $sesmt->telefone = $request->input('telefone');
        $sesmt->save();

        return redirect('/sesmt')->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sesmt = Sesmt::find($id);
        $sesmt->delete();

        return redirect('/sesmt')->with('danger','Removido com sucesso!');
    }
}
