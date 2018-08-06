<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:user');
    }
    
    public function menu(){
        return view('menu');
    }

    public function menuResponsavel(){
        return view('menuResponsavel');
    }

    public function menuEditar(){
        return view('menuEditar');
    }
}
