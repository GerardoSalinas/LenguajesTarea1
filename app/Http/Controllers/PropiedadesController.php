<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedade;

class PropiedadesController extends Controller
{   
    public function mostrarPropiedades(){
        $registros = Propiedade::all();
        return view('mostrarRegistros',compact('registros'));
    }
}
