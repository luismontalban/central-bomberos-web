<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UsuarioController extends Controller {
    
    
    public function quien() {
        return view('otras.quien');
    }

    public function index() {

        return view('inicio');
    }

    public function iniciar() {

        return view('usuario.login');
    }

    public function menu() {

        return view('usuario.menu');
    }

    public function master() {
        //RECUPERAR DATOS DE LA BD
        $usuarios = DB::table('usuario')->get();

        return view('layout.master', [
            'usuarios' => $usuarios
        ]);
    }

    public function misdatos() {


        $usuarios = DB::table('usuario')->get();
        return view('usuario.misdatos', [
            'usuarios' => $usuarios,
        ]);
    }

}
