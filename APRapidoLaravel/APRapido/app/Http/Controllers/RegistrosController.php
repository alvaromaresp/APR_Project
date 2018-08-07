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
        $apr = Apr::all();
        $user = User::all();

       /* foreach ($registros as $registro){ 
            for($i=0; $i<count($user); $i++){
               if($registro->user==$user->id){
                  $registro->user=$user->nome;  
               } 
            }
            for($i=0; $i<count($apr); $i++){
               if($registro->apr==$apr->id){
                   $registro->apr=$apr->nome;
               } 
            }
        }
*/
        return view('registro.index')->with('registros', $registros);
    }


    public function search(Request $request){ 
        $request=date_format($request->input('search'), 'Y-m-d'); 

    	$registros = Impressao::where([
            ['created_at', 'BETWEEN', $request . '00:00:00 AND' . $request . '23:59:59']
        ])->paginate(10);

        return view('registro.index')->with('registros',$registros);
    }
}
