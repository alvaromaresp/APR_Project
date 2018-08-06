<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Checklist;

class CheckListController extends Controller
{

    //
    public function __construct()
    {
        $this->middleware('role:admin');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $checklist = Checklist::orderBy('item', 'desc')->paginate(5);
        return view('checklist.index')->with('checklist',$checklist);
    }


    public function search(Request $request){

        $checklists = Checklist::where([
            ['item', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(5);

        return view('checklist.index')->with('checklist',$checklists);

    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('checklist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['item'=>'required']);
        $checklist = new Checklist;
        $checklist->item = $request->input('item');
        $checklist->save();

        return redirect('/checklist')->with('success','Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $checklist = Checklist::find($id);
        return view('checklist.show')->with('checklist',$checklist);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checklist = Checklist::find($id);
        return view('checklist.edit')->with('checklist',$checklist);
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
        $this->validate($request,['item'=>'required']);
        $checklist = Checklist::find($id);
        $checklist->item = $request->input('item');
        $checklist->save();

        return redirect('/checklist')->with('success','Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $checklist = Checklist::find($id);
        $checklist->delete();

        return redirect('/checklist')->with('danger','Removido com sucesso!');
    }
}
