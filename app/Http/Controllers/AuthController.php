<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Usuario;

class AuthController extends Controller {

    public function loginPost(Request $request) {

        $rut = $request->input('rut');
        $password = $request->input('password');


//        var_dump($hashed, $rut);
//        die();

        if (Auth::attempt(
            array(
              'rut' => $rut,
              'password' => $password,
                ))) {

            $respuesta = ' rut  ' . $rut;
            $respuesta += ' password ' . $password;
            return $respuesta;
        } else {
            return 'fallo login';
        }
    }

}
