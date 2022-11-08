<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Usuario;
use Session;
Use DB;

class LoginController extends Controller {

    use AuthenticatesUsers;
    
    
    
    
    
     public function inicio() {
        
        
        $emerultimas = DB::table('emergencia')
                ->where('estado', '=', 'Ocurrida')
                ->orderBy('fecha_emer', 'desc')
                ->paginate(3);
                
        

        $emergencias = DB::table('emergencia')
                ->where('estado', '=', 'Activa')
                ->orderBy('fecha_emer', 'desc')
                ->paginate(3);

        return view('usuario.menu', [
                'emerul' => $emerultimas,
                'emergencias' => $emergencias,
            ]);
    }
    
    
    
    

    // funcion para inciar sesion
    public function authenticate(Request $request) {
        
         
        $usuario = Usuario::where('rut', $request->rut)
                ->where('password', $request->password)
                ->first();

        if ($usuario) {
            Auth::loginUsingId($usuario->id);
            

         return redirect()->action('Auth\LoginController@inicio');
            
        } else {
            return redirect('login')->with('status', 'Datos Incorrectos!');
        }



}

public function logout() {
        Auth::logout();
        Session::flush();
       return redirect('/');
    }



}