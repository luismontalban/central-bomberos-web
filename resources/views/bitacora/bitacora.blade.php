@include('layout.master')

        <div class="container">

            <div>
                
                @if(isset($bitacora) && is_object($bitacora))
                <h5 class="center-align">Actualizar Bitacora</h5>
                @else
                <h5 class="center-align">Formulario de Bitacoras</h5>
                @endif
                

            </div>
            <br/>
        </div>

        <div class="container">
            
             <div class="row card-panel">
                 <form class="col s12" method="POST" action="{{isset($bitacora) ? action('BitacoraController@updatebitacora') : action('BitacoraController@savebitacoraa')}}">
                     @csrf
    
      <div class="row">
          
        <div class="input-field col s6">
             @if(isset($bitacora) && is_object($bitacora))

                    <input type="hidden" name="idbitacora" value="{{$bitacora->idbitacora }}" />
                    @endif
            <input id="maquinista" type="text" class="validate" name="maquinista" value="{{$bitacora->maquinista ?? ''}}">
          <label for="maquinista">Maquinista</label>
        </div>
          
          <div class="input-field col s6">
              <input id="obac" type="text" class="validate" name="obac" value="{{$bitacora->obac ?? ''}}">
          <label for="obac">Obac</label>
        </div>
      </div>
      <div class="row">
         <div class="input-field col s6">
             <input id="fecha_salida" type="date" class="validate" name="fecha_salida" value="{{$bitacora->fecha_salida ?? ''}}" required>
          <label for="fecha_salida">Fecha Salida</label>
        </div>
          
            <div class="input-field col s6">
                <input id="hora_salida" type="time" class="validate" name="hora_salida" value="{{$bitacora->hora_salida ?? ''}}" required>
          <label for="hora_salida">Hora Salida</label>
        </div>
          
          
      </div>
      <div class="row">
         <div class="input-field col s6">
             <input id="fecha_llegada" type="date" class="validate" name="fecha_llegada" value="{{$bitacora->fecha_llegada ?? ''}}" required>
          <label for="fecha_llegada">Fecha Llegada</label>
        </div>
          
            <div class="input-field col s6">
              <input id="hora_llegada" type="time" class="validate" name="hora_llegada" value="{{$bitacora->hora_llegada ?? ''}}" required>
          <label for="hora_llegada">Hora Llegada</label>
        </div>
      </div>
                     
          <div class="row">
         <div class="input-field col s6">
              <input id="km_salida" type="number" class="validate" name="km_salida" value="{{$bitacora->km_salida ?? ''}}">
          <label for="km_salida">Km Salida</label>
        </div>
          
            <div class="input-field col s6">
               <input id="orometro_salida" type="number" class="validate" name="orom_salida" value="{{$bitacora->orom_salida ?? ''}}">
          <label for="orometro_salida">Orometro de Salida</label>
        </div>
      </div>
                     
          <div class="row">
            <div class="input-field col s6">
               <input id="km_llegada" type="number" class="validate" name="km_llegada" value="{{$bitacora->km_llegada ?? ''}}">
          <label for="km_llegada">Km Llegada</label>
        </div>
         
               <div class="input-field col s6">
              <input id="orometro_llegada" type="number" class="validate" name="orom_llegada" value="{{$bitacora->orom_llegada ?? ''}}">
          <label for="orometro_llegada">Orometro de Llegada</label>
        </div>
              
      </div>               
                     
         <div class="row">
            <div class="input-field col s6">
               <input id="comb_salida" type="number" class="validate" name="comb_salida" value="{{$bitacora->comb_salida ?? ''}}">
          <label for="comb_salida">Combustible de salida</label>
        </div>
         
               <div class="input-field col s6">
              <input id="comb_llegada" type="number" class="validate" name="comb_llegada" value="{{$bitacora->comb_llegada ?? ''}}">
          <label for="comb_llegada">Combustible de Llegada</label>
        </div>
              
      </div>
                     
          <div class="row">
            <div class="input-field col s6">
               <input id="cant_voluntarios" type="number" class="validate" name="cant_voluntarios" value="{{$bitacora->cant_voluntarios ?? ''}}">
          <label for="cant_voluntarios">Cantidad de Voluntarios</label>
        </div>
         
               <div class="input-field col s6">
              <input id="destino" type="text" class="validate" name="destino" value="{{$bitacora->destino ?? ''}}">
          <label for=destino>Destino</label>
        </div>
              
      </div>
                     
          <div class="row">
        <div class="col s12">
            @if(isset($bitacora) && is_object($bitacora))
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


