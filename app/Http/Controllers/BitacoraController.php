<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BitacoraController extends Controller {

    public function index() {

        return view('bitacora.bitacora');
    }
    
     


    public function verbitacoras() {

        //RECUPERAR DATOS DE LA BD
        $bitacora = DB::table('bitacora')
                ->orderBy('fecha_salida', 'desc')
                ->get();



        return view('bitacora.verbitacora', [
            'bitacoras' => $bitacora
        ]);
    }

    public function savebitacoraa(Request $request) {
        
        
        
         $validatedData = $request->validate([
           'maquinista' => 'nullable|string|max:45',
            'obac' => 'nullable|string|max:45',
          
            'km_salida' => 'nullable|integer',
            'km_llegada' => 'nullable|integer',
            'orom_llegada' =>'nullable|integer',
            'orom_salida' => 'nullable|integer',
            'comb_salida' => 'nullable|integer',
            'comb_llegada' => 'nullable|integer',
            'cant_voluntarios' =>'nullable|integer',
            'destino' => 'nullable|string',
                ]);
        
        
        
        
        if($validatedData){
            
            $bitacora = DB::table('bitacora')->insert(array(
            'maquinista' => $request->input('maquinista'),
            'obac' => $request->input('obac'),
            'fecha_salida' => $request->input('fecha_salida'),
            'hora_salida' => $request->input('hora_salida'),
            'fecha_llegada' => $request->input('fecha_llegada'),
            'hora_llegada' => $request->input('hora_llegada'),
            'km_salida' => $request->input('km_salida'),
            'km_llegada' => $request->input('km_llegada'),
            'orom_llegada' => $request->input('orom_llegada'),
            'orom_salida' => $request->input('orom_salida'),
            'comb_salida' => $request->input('comb_salida'),
            'comb_llegada' => $request->input('comb_llegada'),
            'cant_voluntarios' => $request->input('cant_voluntarios'),
            'destino' => $request->input('destino'),
            'unidad_idunidad' => 1
        ));

return redirect()->route('init');

            
            
            
            
        }
        
        
        

        

    }

    public function editbita($id) {

        $bitacora = DB::table('bitacora')->where('idbitacora', $id)->first();

        //PASARLE A LA VISTA EL DATO

        return view('bitacora.bitacora', [
            'bitacora' => $bitacora
        ]);
    }

    public function updatebitacora(Request $request) {
        $id = $request->input('idbitacora');
        $bitacora = DB::table('bitacora')
                ->where('idbitacora', $id)
                ->update(array(
            'maquinista' => $request->input('maquinista'),
            'obac' => $request->input('obac'),
            'fecha_salida' => $request->input('fecha_salida'),
            'hora_salida' => $request->input('hora_salida'),
            'fecha_llegada' => $request->input('fecha_llegada'),
            'hora_llegada' => $request->input('hora_llegada'),
            'km_salida' => $request->input('km_salida'),
            'km_llegada' => $request->input('km_llegada'),
            'orom_llegada' => $request->input('orom_llegada'),
            'orom_salida' => $request->input('orom_salida'),
            'comb_salida' => $request->input('comb_salida'),
            'comb_llegada' => $request->input('comb_llegada'),
            'cant_voluntarios' => $request->input('cant_voluntarios'),
            'destino' => $request->input('destino'),
            'unidad_idunidad' => 1
        ));

         return redirect()->route('init');
    }

}
