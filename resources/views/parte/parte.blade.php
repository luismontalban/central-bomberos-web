@include('layout.master')

<div class="container">

    <div>


      @if(isset($parte) && is_object($parte))
                <h5 class="center-align">Actualizar Parte de Emergencia</h5>
                @else
                <h5 class="center-align">Registrar Parte de Emergencia</h5>
                @endif




    </div>
    
     @if ($errors->any())       
    <div class="card-panel">
        <span class="red-text red accent-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul> 

        </span>
    </div>
    @endif
    
    
    
    
    
    <br/>
</div>

<div class="container">

    <div class="row card-panel">
        <form class="col s12" method="POST" action="{{isset($parte) ? action('ParteController@updateparte') : action('ParteController@saveparte')}}">
            @csrf
            <div class="row">
                <div class="input-field col s6">

 
                    @if(isset($emergencia) && is_object($emergencia))
                    <!-- DATOS DE LA EMERGENCIA -->

                    <input type="hidden" name="idemergencia_emer" value="{{$emergencia->idemergencia }}" />
                    <input type="hidden" name="fecha_emer" value="{{$emergencia->fecha_emer }}" />
                    <input type="hidden" name="hora_emer" value="{{$emergencia->hora_emer }}" />

                    <!-- X -->
                    @else
                 
                    <input type="hidden" name="fecha_emer" value="{{$parte->fecha }}" />
                    <input type="hidden" name="hora_emer" value="{{$parte->hora_inicio }}" />
                    @endif
                    
                    
                    
                    
                    @if(isset($parte) && is_object($parte))

    <input type="hidden" name="idpemergencia" value="{{$parte->idpemergencia }}" />
@endif
                  
<input  id="nom_persona" type="text" class="validate" name="nom_pers_afectada" value="{{$parte->nom_pers_afectada ?? '' }}" >
                    <label for="nom_persona">Nombre Persona</label>
                </div>
                <div class="input-field col s6">
                    <input id="rut" type="text" class="validate"  name="rut_pers_afectada" value="{{$parte->rut_pers_afectada ?? '' }}" maxlength="10">
                    <label for="rut">Rut</label>
                </div>
            </div>
            
            <div class="row">
                
                <div class="input-field col s6">
                    <input id="telefono" type="number" class="validate" name="tel_pers_afectada" value="{{$parte->tel_pers_afectada ?? '' }}"  >
                    <label for="telefono">Telefono</label>
                </div>
         
                <div class="input-field col s6">
                    <input id="direccion" type="text" class="validate" name="direccion" value="{{$parte->direccion ?? '' }}" >
                    <label for="direccion">Direccion</label>
                </div>
           
            </div>
           
            <div class="row">
                <div class="input-field col s6">
                    <input id="claveacto" type="text" class="validate" name="clave_acto" value="{{$parte->clave_acto ?? '' }}" >
                    <label for="claveacto">Clave Acto</label>
                </div>

                <div class="input-field col s6">
                    <input id="tipoacto" type="text" class="validate" name="tipo_acto" value="{{$parte->tipo_acto ?? '' }}">
                    <label for="tipoacto">Tipo Acto</label>
                </div>
            </div>            

            <div class="row">
                <div class="input-field col s4">
                    <input id="horatermino" type="time" class="validate" name="hora_termino" value="{{$parte->hora_termino ?? ''}}">
                    <label for="horatermino">Hora Termino</label>
                </div>

                
                 <div class="input-field col s4">
                    <input id="nombredeloficial" type="text" class="validate" name="tipo_propiedad" value="{{$parte->tipo_propiedad ?? ''}}">
                    <label for="tipopropiedad">Tipo Propiedad</label>
                </div>
                
                
                <div class="input-field col s4">
                    <select name="tipo_propietario" >
                        <option value="{{$parte->tipo_propietario ?? '' }}" disabled selected>{{$parte->tipo_propietario ?? '' }}</option>
                        <option value="Dueño">Dueño</option>
                        <option value="Arrendatario">Arrendatario</option>
                        <option value="Otro">Otro</option>
                    </select>

                    <label for="tipo_propietario">Tipo de Propietario</label>
                </div>
                
                
            </div>             

            <div class="row">
                <div class="input-field col s6">
                    <input id="grupofamiliar" type="number" class="validate" name="grupo_familiar" value="{{$parte->grupo_familiar ?? '' }}">
                    <label for="grupofamiliar">Grupo familiar de</label>
                </div>

                <div class="input-field col s6">
                    <textarea id="setratode" type="text" class="validate" name="se_trato_de">{{$parte->se_trato_de ?? '' }}</textarea>
                    <label for="setratode">Se trato de</label>
                </div>
            </div>             


            <div class="row">
                <div class="input-field col s6">
                    <textarea id="origenincendio" type="text" class="validate" name="origen_incendio">{{$parte->origen_incendio ?? '' }}</textarea>
                    <label for="origenincendio">Origen Incendio</label>
                </div>

                <div class="input-field col s6">
                    <textarea id="causaincendio" type="text" class="validate" name="causa_incendio">{{$parte->causa_incendio ?? '' }}</textarea>
                    <label for="causaincendio">Causa Incendio</label>
                </div>
            </div> 

            <div class="row">
                <div class="input-field col s6">
                    <input id="niveldaño" type="number" class="validate" name="nivel_daño" value="{{$parte->nivel_daño ?? '' }}">
                    <label for="niveldaño">Nivel Daño %</label>
                </div>

                <div class="input-field col s6">

                    <select name="pres_matpel" multiple>
      <option value="{{$parte->pres_matpel ?? '' }}" disabled selected>{{$parte->pres_matpel ?? '' }}</option>
      <option value="No">NO</option>
      <option value="Gas">Gas</option>
      <option value="Nitrogeno">Nitrogeno</option>
    </select>
    <label>Presencia Materiales peligrosos</label>


                </div>
            </div>  

            <div class="row">
                <div class="input-field col s6">
                    <input id="unidadesc" type="text" class="validate" name="unidades_concurrentes" value="{{$parte->unidades_concurrentes ?? '' }}">
                    <label for="unidadesc">Unidades concurrentes</label>
                </div>

                <div class="input-field col s6">
                    <p>
                        <label for="unidadescon">APOYO DE OTROS CUERPOS : </label>
                        <label>
                            <input name="apoyos" type="radio" value="{{$parte->apoyo_cuerpos ?? '' }}" checked="" />
                            <span>SI</span>
                        </label>

                        <label>
                            <input name="apoyos" type="radio" value="{{$parte->apoyo_cuerpos ?? '' }}" checked="checked" />
                            <span>NO</span>
                        </label>        
                    </p>
                </div>
            </div>  

            <div class="row">
                <div class="input-field col s6">
                    <input id="carabinero" type="text" class="validate" name="car_cargo" value="{{$parte->car_cargo ?? '' }}">
                    <label for="carabinero">Carabinero a cargo</label>
                </div>

                <div class="input-field col s6">
                     <input id="patentemovil" type="text" class="validate" name="patente_car_cargo" value="{{$parte->patente_car_cargo ?? '' }}">
                    <label for="patentcarabinero">Patente Carabinero</label>
                </div>
            </div> 

            <div class="row">
                <div class="input-field col s6">
                    <select name="otros_apoyos" multiple>
      <option value="" disabled selected>{{$parte->otros_apoyos ?? '' }}</option>
      <option value="Samu">Samu</option>
      <option value="GSE">GSE</option>
      <option value="GESa">GESa</option>
      <option value="CIA DE GAS">CIA DE GAS</option>
      <option value="Agua del Valle">Agua del Valle</option>
    </select>
                     <label>Otros apoyos</label>
                </div>

                <div class="input-field col s6">
                     
                    <select name="oficial_cargo">
      <option value="{{$parte->tipo_oficial_cargo ?? '' }}" disabled selected>{{$parte->oficial_cargo ?? '' }}</option>
      <option value="Capitan">Capitan</option>
      <option value="Teniente">Teniente</option>
      <option value="Voluntario">Voluntario</option>
    </select>
    <label>Oficial a cargo</label>
                   
                </div>
            </div> 


            <div class="row">

                <div class="input-field col s6">
                    <input id="nombredeloficial" type="text" class="validate" name="nom_de_cargo" value="{{$parte->nom_de_cargo ?? '' }}">
                    <label for="nombredeloficial">Nombre del oficial</label>
                </div>
                
                <div class="input-field col s6">
                    <textarea id="resumenacto" type="text" class="validate" name="resumen_acto">{{$parte->resumen_acto ?? '' }}</textarea>
                    <label for="resumenacto">Resumen del acto</label>
                </div>
            </div> 
            
            
            <div class="row">

                <div class="input-field col s6">
                    <select name="bitacora">
      <option value="{{$parte->bitacora ?? '' }}" disabled selected>{{$parte->bitacora ?? '' }}</option>
      <option value="activo">Activo</option>
      <option value="entregado">Entregado</option>
    
    </select>
    <label>Bitacora</label>
                    
                </div>
                
                
               
                
                
                
            </div> 


            <div class="row">
                <div class="col s12">
                @if(isset($parte) && is_object($parte))
                    <center><button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                            <i class="material-icons right">send</i>
                        </button></center>
                   @else
                    <center><button class="btn waves-effect waves-light" type="submit" name="action">Guardar
                            <i class="material-icons right">send</i>
                        </button></center>
                 @endif
                </div>
            </div>
        </form>
    </div>





</div>








</body>



@include('layout.final')


