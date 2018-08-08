<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riscos;
use App\Medidaspreventivas;


class RiscosController extends Controller
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
    public function index()
    {
        $riscos = Riscos::orderBy('risco','asc')->paginate(5);
        return view('riscos.index')->with('riscos',$riscos);
    }

    public function search(Request $request){

        $riscos = Riscos::where([
            ['risco', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(5);

        return view('riscos.index')->with('riscos',$riscos);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($modal = "false")
    {
        $data = array(
            'modal' => $modal
        );
        return view('riscos.create')->with('data', $data);
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
        $risco = new Riscos;
        $risco->risco = $request->input('risco');
        $risco->save();
        
        
        $mp = Medidaspreventivas::all();
        $modal = $request->input('modal');

        $data = array(
            'risco' => $risco,
            'mp' => $mp,
            'modal' => $modal
        );

        return view('Riscos.associate')->with('data', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $riscos = Riscos::find($id);
        $mp = $riscos->Medidaspreventivas;
        
        $data = array(
            'riscos' => $riscos,
            'mp' => $mp
        );

        
        return view('riscos.show')->with('data',$data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $risco = Riscos::find($id);
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
        $this->validate($request,['risco'=>'required']);

        $risco = Riscos::find($id);
        $risco->risco = $request->input('risco');
        $risco->save();

        $mp = Medidaspreventivas::all();

        $data = array(
            'risco' => $risco,
            'mp' => $mp
        );

        return view('Riscos.associate')->with('data', $data);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $risco = Riscos::find($id);
        $risco->delete();

        $riscos = Riscos::orderBy('risco','asc')->paginate(5);

        return view('riscos.index')->with('riscos', $riscos);
    }

    /**
     * Associate Riscos to NaturezaRiscos
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function associate(Request $request, $id){
        $risco = Riscos::find($id);
        $risco->medidaspreventivas()->attach($request->input('medidaPreventiva'));

        $mp = Medidaspreventivas::all();

        $modal = $request->input('modal');

        $data = array(
            'risco' => $risco,
            'mp' => $mp,
            'modal' => $modal
        );

        return view('Riscos.associate')->with('data', $data);
    }

    /**
     * Desassociate Riscos to NaturezaRiscos
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function desassociate(Request $request, $risco){

        $risco = Riscos::find($risco);
        $risco->medidaspreventivas()->detach($request->input('mp'));

        $mp = Medidaspreventivas::all();

        $modal = $request->input('modal');

        $data = array(
            'risco' => $risco,
            'mp' => $mp,
            'modal' => $modal
        );

        return view('Riscos.associate')->with('data', $data);
    }
}
