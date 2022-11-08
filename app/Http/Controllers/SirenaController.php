<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SirenaController extends Controller
{
    public function index() {
        
         
        return view('sirena.loginsirena');
    }
    
    
    public function init(Request $request) {
          $clave=132132132;
          $clave=$request->password;
          
          
          if($clave == '132132132'){
              return redirect()->away('http://sineracentralweb.hopto.org');
          }else{
              return redirect('sirenalogin')->with('status', 'Datos Incorrectos!');
          }
                
        
    }
    
}
