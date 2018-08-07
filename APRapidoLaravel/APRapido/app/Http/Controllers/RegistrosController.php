<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Impressao;
use App\Apr; 
use App\User;
 
class RegistrosController extends Controller
{
    public function index(){
        $aprs = array();
        foreach (Apr::all()as $apr){
            $aprs[$apr->id] = $apr;
        }
        $users = array();
        foreach (Sesmt::all() as $user){
            $users[$user->id] = $user;
        }
    	$registros = Impressao::orderBy('created_at', 'desc')->paginate(10);
        return view('registro.index')->with('registros',$registros);
    }

    public function search(Request $request){ 
        $request=date_format($request->input('search'), 'Y-m-d'); 
    	$registros = Impressao::where([
            ['created_at', 'LIKE', '%' . $request . '%']
        ])->paginate(10);

        return view('registro.index')->with('registros',$registros);
    }
}
