<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ParteController extends Controller {

    public function index() {

        $emergencia = DB::table('emergencia')->get();


        return view('parte.parte', [
            'emergencias' => $emergencia
        ]);
    }

    public function generarParte() {

        //RECUPERAR DATOS DE LA BD
        $emergencia = DB::table('emergencia')
                ->where('estado', '=', 'Activa')
                ->orderBy('fecha_emer', 'desc')
                ->get();





        return view('parte.generarparte', [
            'emergencias' => $emergencia
        ]);
    }

    public function saveparte(Request $request) {


        $validatedData = $request->validate([
            'nom_pers_afectada' => 'nullable|string|max:45',
            'rut_pers_afectada' => 'nullable|string',
            'tel_pers_afectada' => 'nullable',
            'direccion' => 'nullable|string|max:45',
            'clave_acto' => 'nullable|string|max:5',
            'tipo_acto' => 'nullable|string|max:45',
            'tipo_propiedad' => 'nullable|string|max:45',
            'tipo_propietario' => 'nullable',
            'grupo_familiar' => 'nullable|integer',
            'se_trato_de' => 'nullable|string',
            'origen_incendio' => 'nullable|string',
            'causa_incendio' => 'nullable|string',
            'nivel_daño' => 'nullable',
            'pres_matpel' => 'nullable',
            'unidades_concurrentes' => 'nullable',
            'car_cargo' => 'nullable',
            'patente_car_cargo' => 'nullable|string',
            'apoyo_cuerpos' => 'nullable',
            'otros_apoyos' => 'nullable',
            'resumen_acto' => 'nullable',
            'oficial_cargo' => 'nullable',
            'nom_de_cargo' => 'nullable',
            'bitacora' => 'nullable',
                ]);


        if ($validatedData) {

            $parte = DB::table('partemer')->insert(array(
                'nom_pers_afectada' => $request->input('nom_pers_afectada'),
                'rut_pers_afectada' => $request->input('rut_pers_afectada'),
                'tel_pers_afectada' => $request->input('tel_pers_afectada'),
                'direccion' => $request->input('direccion'),
                'clave_acto' => $request->input('clave_acto'),
                'tipo_acto' => $request->input('tipo_acto'),
                'hora_inicio' => $request->input('hora_emer'),
                'hora_termino' => $request->input('hora_termino'),
                'fecha' => $request->input('fecha_emer'),
                'tipo_propiedad' => $request->input('tipo_propiedad'),
                'tipo_propietario' => $request->input('tipo_propietario'),
                'grupo_familiar' => $request->input('grupo_familiar'),
                'se_trato_de' => $request->input('se_trato_de'),
                'origen_incendio' => $request->input('origen_incendio'),
                'causa_incendio' => $request->input('causa_incendio'),
                'nivel_daño' => $request->input('nivel_daño'),
                'pres_matpel' => $request->input('pres_matpel'),
                'unidades_concurrentes' => $request->input('unidades_concurrentes'),
                'car_cargo' => $request->input('car_cargo'),
                'patente_car_cargo' => $request->input('patente_car_cargo'),
                'apoyo_cuerpos' => $request->input('apoyos'),
                'otros_apoyos' => $request->input('otros_apoyos'),
                'resumen_acto' => $request->input('resumen_acto'),
                'oficial_cargo' => $request->input('oficial_cargo'),
                'nom_de_cargo' => $request->input('nom_de_cargo'),
                'bitacora' => $request->input('bitacora'),
                'emergencia_idemergencia' => $request->input('idemergencia_emer')
            ));



            return redirect()->route('init');
        }







//        var_dump($parte);
//        die();
    }

    public function edit($id) {

        $emergencia = DB::table('emergencia')->where('idemergencia', $id)->first();

        //PASARLE A LA VISTA EL DATO

        return view('parte.parte', [
            'emergencia' => $emergencia
        ]);
    }

    public function editp($id) {

        $parte = DB::table('partemer')->where('idpemergencia', $id)->first();
        $emergencia = DB::table('emergencia')
                ->where('estado', '=', 'Activa')
                ->orderBy('fecha_emer', 'desc')
                ->get();



        //PASARLE A LA VISTA EL DATO

        return view('parte.parte', [
            'parte' => $parte,
            'emergencias' => $emergencia
        ]);
    }

    public function verParte() {

        //RECUPERAR DATOS DE LA BD
        $parte = DB::table('partemer')
                ->orderBy('fecha', 'desc')
                ->get();

        $emergencia = DB::table('emergencia')
                ->where('estado', '=', 'Activa')
                ->orderBy('fecha_emer', 'desc')
                ->get();




        return view('parte.verparte', [
            'partes' => $parte
        ]);
    }

    public function updateparte(Request $request) {
        $id = $request->input('idpemergencia');
        $parte = DB::table('partemer')
                ->where('idpemergencia', $id)
                ->update(array(
            'nom_pers_afectada' => $request->input('nom_pers_afectada'),
            'rut_pers_afectada' => $request->input('rut_pers_afectada'),
            'tel_pers_afectada' => $request->input('tel_pers_afectada'),
            'direccion' => $request->input('direccion'),
            'clave_acto' => $request->input('clave_acto'),
            'tipo_acto' => $request->input('tipo_acto'),
            'hora_inicio' => $request->input('hora_emer'),
            'hora_termino' => $request->input('hora_termino'),
            'fecha' => $request->input('fecha_emer'),
            'tipo_propiedad' => $request->input('tipo_propiedad'),
            'tipo_propietario' => $request->input('tipo_propietario'),
            'grupo_familiar' => $request->input('grupo_familiar'),
            'se_trato_de' => $request->input('se_trato_de'),
            'origen_incendio' => $request->input('origen_incendio'),
            'causa_incendio' => $request->input('causa_incendio'),
            'nivel_daño' => $request->input('nivel_daño'),
            'pres_matpel' => $request->input('pres_matpel'),
            'unidades_concurrentes' => $request->input('unidades_concurrentes'),
            'car_cargo' => $request->input('car_cargo'),
            'patente_car_cargo' => $request->input('patente_car_cargo'),
            'apoyo_cuerpos' => $request->input('apoyos'),
            'otros_apoyos' => $request->input('otros_apoyos'),
            'resumen_acto' => $request->input('resumen_acto'),
            'oficial_cargo' => $request->input('oficial_cargo'),
            'nom_de_cargo' => $request->input('nom_de_cargo'),
            'bitacora' => $request->input('bitacora'),
        ));

        return redirect()->route('init');
    }

}
