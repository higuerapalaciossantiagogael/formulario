<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
    public function guardarOpinion(Request $request){
        $datos = $request->input();
        // para verificar que este enviando los datos correctos
        //dd($datos);

        // crear el objeto y grabar en la base de datos
        $opinion = new Opinion();
        $opinion->nombre= $datos["nombre"];
        $opinion->email= $datos["email"];
        $opinion->opinion= $datos["opinion"];
        $opinion->save();

        return redirect('/registrar');
    }
}
