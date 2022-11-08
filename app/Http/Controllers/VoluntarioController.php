<?php

namespace App\Http\Controllers;

use App\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller {

    public function index() {


        return view('voluntario.voluntario');
    }

    public function savevol(Request $request) {

        $voluntario = new Voluntario;
        $voluntario->rut = $request->rut;
        $voluntario->nombres = $request->nombres;
        $voluntario->ape_paterno = $request->ape_paterno;
        $voluntario->ape_materno = $request->ape_materno;
        $voluntario->fech_nac = $request->fech_nac;
        $voluntario->estado_voluntario = $request->estado_voluntario;
        $voluntario->fech_ingreso = $request->fech_ingreso;
        $voluntario->asistencia = $request->asistencia;
        $voluntario->numero_compañia = $request->numero_compañia;
        $voluntario->num_general = $request->num_general;
        $voluntario->cargo_idcargo = $request->cargo_idcargo;
        $voluntario->compañia_idcompañia = $request->compañia_idcompañia;

//        var_dump($voluntario);
//        die();
        $voluntario->save();

        return back();
    }

    public function update(Request $request) {
        
    }

    public function vervoluntarios() {
       
        
       $voluntario = Voluntario::paginate(6);
       



        return view('voluntario.vervoluntario')->with('voluntarios', $voluntario);
    }

}
