<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;

class DueniosController extends Controller
{
    public function mostrarDuenios(){
        $registros = Duenio::all();
        return view('mostrarRegistros',compact('registros'));
    }

    public function formularioAgregarDuenio(){
        return view('insertarDuenio');
    }
    public function agregarDuenio(Request $request){
        $nuevoDuenio = new Duenio();
        $nuevoDuenio->nombre = $request->nombre;
        $nuevoDuenio->apellido = $request->apellido;
        $nuevoDuenio->correo = $request->correo;
        $nuevoDuenio->save();

        return $this->mostrarDuenios();
    }

    public function verDuenio(int $id){
        $duenio = Duenio::find($id);
        return view('verDuenio',compact('duenio'));
    }
}
