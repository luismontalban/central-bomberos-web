@include('layout.master')



 <div class="container">

            <div>
                
               
                <h5 class="center-align">Actualizar Emergencia</h5>
                
                <h5 class="center-align">Formulario de Emergencias</h5>
               
                
               

            </div>
            <br/>
        </div>

        <div class="container">
            
             <div class="row card-panel">
                 <form class="col s12" method="POST" action="{{isset($emergencia) ? action('EmergenciaController@update') : action('EmergenciaController@save')}}">
                     @csrf
      <div class="row">
        <div class="input-field col s6">
            

   

<input  id="first_name" type="text" class="validate" name="clave_emer" value="">
          <label for="clave">Clave</label>
        </div>
        <div class="input-field col s6">
            <input id="last_name" type="text" class="validate" name="direc_emer" value="">
          <label for="direccion">Dirección</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <input id="last_name" type="date" class="validate" name="fecha_emer" value="">
          <label for="fecha">Fecha Emergencia</label>
        </div>
          
          <div class="input-field col s6">
              <input id="time" type="time" class="validate" name="hora_emer" value="">
          <label for="hora">Hora</label>
        </div>
      </div>
      <div class="row">
         <div class="input-field col s6">
             <textarea id="textarea1" type="text" class="validate" name="descripcion"></textarea>
          <label for="descripcion">Descripción</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
            <select name="estado" >
      <option value="" disabled selected></option>
      <option value="Activa">Activa</option>
      <option value="Ocurrida">Ocurrida</option>
      
    </select>
    <label>Estado</label>
  </div>
      </div>
      <div class="row">
        <div class="col s12">
           
            <center><button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
    <i class="material-icons right">send</i>
                </button></center>
            
            <center><button class="btn waves-effect waves-light" type="submit" name="action">Guardar
    <i class="material-icons right">send</i>
                </button></center>
            
        </div>
      </div>
    </form>
  </div>
            
            
            
            
            
        </div>
    

        





    </body>



 @include('layout.final')