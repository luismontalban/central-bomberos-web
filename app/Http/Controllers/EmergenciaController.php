<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmergenciaController extends Controller
{
    public function index()
    {
        return view('emergencia.emergencia');
    }

    public function save(Request $request)
    {
        $validatedData = $request->validate(
            [
                'clave_emer' => 'required',
                'ciudad_emer' => 'required|alpha',
                'direc_emer' => 'required',
                'fecha_emer' => 'required',
                'hora_emer' => 'required',
                'descripcion' => 'required',
                'estado' => 'required',
            ],
            [
                'clave_emer.required' => 'Ingrese la clave de la emergencia',
                'ciudad_emer.required' => 'Ingrese la ciudad',
                'direc_emer.required' => 'Ingrese la dirección',
                'fecha_emer.required' => 'Ingrese la fecha',
                'hora_emer.required' => 'Ingrese la hora',
                'descripcion.required' => 'Ingrese la descripción',
                'estado.required' => 'Ingrese el estado de la emergencia',
            ]
        );

        if ($validatedData) {
            $emergencia = DB::table('emergencia')->insert([
                'clave_emer' => $request->input('clave_emer'),
                'ciudad_emer' => $request->input('ciudad_emer'),
                'direc_emer' => $request->input('direc_emer'),
                'fecha_emer' => $request->input('fecha_emer'),
                'hora_emer' => $request->input('hora_emer'),
                'descripcion' => $request->input('descripcion'),
                'estado' => $request->input('estado'),
                'personasolicitante_idpersol' => 1,
            ]);

            return redirect()->route('init');
        }
    }

    public function menuVer()
    {
        //RECUPERAR DATOS DE LA BD
        $emergencia = DB::table('emergencia')
            ->orderBy('fecha_emer', 'desc')
            ->get();

        return view('emergencia.ver', [
            'emergencias' => $emergencia,
        ]);
    }

    public function edit($id)
    {
        $emergencia = DB::table('emergencia')
            ->where('idemergencia', $id)
            ->first();

        //PASARLE A LA VISTA EL DATO

        return view('emergencia.emergencia', [
            'emergencia' => $emergencia,
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->input('idemergencia');
        $emergencia = DB::table('emergencia')
            ->where('idemergencia', $id)
            ->update([
                'clave_emer' => $request->input('clave_emer'),
                'ciudad_emer' => $request->input('ciudad_emer'),
                'direc_emer' => $request->input('direc_emer'),
                'fecha_emer' => $request->input('fecha_emer'),
                'hora_emer' => $request->input('hora_emer'),
                'descripcion' => $request->input('descripcion'),
                'estado' => $request->input('estado'),
                'personasolicitante_idpersol' => 1,
            ]);

        return redirect()->route('init');
    }
}
