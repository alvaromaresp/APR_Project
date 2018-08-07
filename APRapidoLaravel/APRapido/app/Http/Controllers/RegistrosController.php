<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impressao;
use App\Apr; 
use App\User;
 
class RegistrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:user');
    }
    
    public function index(){
    	$registros = Impressao::orderBy('created_at', 'desc')->paginate(10);
        return view('registro.index')->with('registros', $registros);
    }


    public function search(Request $request){ 
    	$registros = Impressao::where([
            ['created_at', 'BETWEEN', '"' . $request->input('search') . ' 00:00:00" AND "' . $request->input('search') . ' 23:59:59"']
        ])->paginate(10);
        return view('registro.index')->with('registros',$registros);
    }
}
