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
            ['created_at', 'LIKE', '%' . $request->input('search') . '%']
        ])->paginate(10);
        return view('registro.index')->with('registros',$registros);
    }
}
