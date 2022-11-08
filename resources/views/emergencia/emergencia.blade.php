@include('layout.master')

<div class="container">

    <div>

        @if(isset($emergencia) && is_object($emergencia))
        <h5 class="center-align">Actualizar Emergencia</h5>
        @else
        <h5 class="center-align">Formulario de Emergencias</h5>
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
        <form class="col s12" method="POST" action="{{isset($emergencia) ? action('EmergenciaController@update') : action('EmergenciaController@save')}}">
            @csrf
            <div class="row">
                <div class="input-field col s3">
                    @if(isset($emergencia) && is_object($emergencia))

                    <input type="hidden" name="idemergencia" value="{{$emergencia->idemergencia }}" />
                    @endif
<!--                    <input  id="first_name" type="text" class="validate" name="clave_emer" value="{{$emergencia->clave_emer ?? ''}}" required>
                    <label for="clave">Clave</label>-->
                    
                    
                    <select name="clave_emer">
      <option value="{{$emergencia->clave_emer ?? ''}}" disabled selected>{{$emergencia->clave_emer ?? ''}}</option>
      <option value="6-13">6-13</option>
      <option value="6-14">6-14</option>
      <option value="6-15">6-15</option>
      <option value="10-0">10-0</option>
      <option value="10-1">10-1</option>
      <option value="10-2">10-2</option>
      <option value="10-3">10-3</option>
      <option value="10-4">10-4</option>
      <option value="10-5">10-5</option>
      <option value="10-6">10-6</option>
      <option value="10-7">10-7</option>
      <option value="10-8">10-8</option>
      <option value="10-9">10-9</option>
      <option value="10-10">10-10</option>
      <option value="10-11">10-11</option>
      <option value="10-12">10-12</option>
      <option value="10-13">10-13</option>
      <option value="10-14">10-14</option>
      <option value="10-15">10-15</option>
      <option value="10-16">10-16</option>
      
    </select>
    <label>Clave</label>

                    
                </div>
                
                 <div class="input-field col s4">
                     <input id="ciudad" type="text" class="validate" name="ciudad_emer" value="{{$emergencia->ciudad_emer ?? ''}}" required="required" maxlength="40" >
                    <label for="ciudad">Ciudad</label>
                </div>
                <div class="input-field col s5">
                    <input id="last_name" type="text" class="validate" name="direc_emer" value="{{$emergencia->direc_emer ?? ''}}" required="required" maxlength="45" >
                    <label for="direccion">Dirección</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <input id="last_name" type="date" class="validate" name="fecha_emer" value="{{$emergencia->fecha_emer ?? ''}}" required>
                    <label for="fecha">Fecha Emergencia</label>
                </div>

                <div class="input-field col s6">
                    <input id="time" type="time" class="validate" name="hora_emer" value="{{$emergencia->hora_emer ?? ''}}" required>
                    <label for="hora">Hora</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <textarea id="textarea1" type="text" class="validate" name="descripcion" required="required" maxlength="255">{{$emergencia->descripcion ?? ''}}</textarea>
                    <label for="descripcion">Descripción</label>
                </div>
                
                <div class="input-field col s4">
                    <select name="estado">
                        <option value="{{$emergencia->estado ?? ''}}" disabled selected>{{$emergencia->estado ?? ''}}</option>
                        <option value="Activa">Activa</option>
                        <option value="Ocurrida">Ocurrida</option>

                    </select>
                    <label>Estado</label>
                </div>
            </div>
            
            <div class="row">
                <div class="col s12">
                    @if(isset($emergencia) && is_object($emergencia))
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


