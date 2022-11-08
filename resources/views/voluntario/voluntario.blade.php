@include('layout.master')


<div class="container">

    <div>

        <!--        @if(isset($emergencia) && is_object($emergencia))-->
        <h5 class="center-align">Actualizar Emergencia</h5>
        <!--        @else-->
        <h5 class="center-align">Formulario de Voluntarios</h5>
        <!--        @endif-->



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

    <div class="row">
        <div class=" row card-panel">

            <form class="col s12">
                <div class="row">
                    <div class="input-field col s5">
                        <input id="text" type="text" class="validate" required="required" maxlength="10">
                        <label for="buscarvol">Ingrese rut</label>


                    </div>

                    <div class="input-field col s6">

                        <button class="btn waves-effect waves-light" type="submit" name="action">Buscar Voluntario
                            <i class="material-icons right">search</i>
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>



</div>




<div class="container">

    <div class="row card-panel">
        <form class="col s12" method="POST" action="{{isset($voluntario) ? action('VoluntarioController@update') : action('VoluntarioController@savevol')}}">
            @csrf
            
            <div class="row">
                <div class="input-field col s4">
                    <input id="text" type="text" class="validate" name="rut" required="required" maxlength="10">
                        <label for="buscarvol">Ingrese rut</label>
                </div>

               
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input id="nombres" type="text" class="validate" name="nombres" value="{{$emergencia->ciudad_emer ?? ''}}" required="required" maxlength="45" >
                    <label for="nombres">Nombres</label>
                </div>

                <div class="input-field col s4">
                    <input id="ape_paterno" type="text" class="validate" name="ape_paterno" value="{{$emergencia->ciudad_emer ?? ''}}" required="required" maxlength="40" >
                    <label for="ape_paterno">Apellido Paterno</label>
                </div>
                <div class="input-field col s4">
                    <input id="ape_materno" type="text" class="validate" name="ape_materno" value="{{$emergencia->direc_emer ?? ''}}" required="required" maxlength="45" >
                    <label for="ape_materno">Apellido Materno</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input id="fech_nac" type="date" class="validate" name="fech_nac" value="{{$emergencia->fecha_emer ?? ''}}" required>
                    <label for="fech_nac">Fecha Nacimiento</label>
                </div>

                <div class="input-field col s4">
                    <select name="estado_voluntario">
                        <option value="" disabled selected>Estado Voluntario</option>
                        <option value="Activo">Activo</option>
                        <option value="Renunciado">Renunciado</option>

                    </select>
                    <label>Estado Voluntario</label>
                </div>

                <div class="input-field col s4">
                    <input id="fech_ingreso" type="date" class="validate" name="fech_ingreso" value="{{$emergencia->fecha_emer ?? ''}}" required>
                    <label for="fech_ingreso">Fecha Ingreso</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input id="asistencia" type="number" class="validate" name="asistencia" value="{{$emergencia->ciudad_emer ?? ''}}" required="required" maxlength="2" >
                    <label for="asistencia">Asistencia</label>
                </div>

                <div class="input-field col s4">
                    <input id="numero_compañia" type="number" class="validate" name="numero_compañia" value="{{$emergencia->ciudad_emer ?? ''}}" required="required" maxlength="40" >
                    <label for="numero_compañia">Numero de Compañia</label>
                </div>
                <div class="input-field col s4">
                    <input id="num_general" type="number" class="validate" name="num_general" value="{{$emergencia->direc_emer ?? ''}}" required="required" maxlength="11" >
                    <label for="num_general">Numero General</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s4">

                    <select name="cargo_idcargo">
                        <option value="" disabled selected>Selecciona el Cargo</option>
                        <option value="1">Voluntario</option>
                        <option value="2">Maquinista</option>
                        <option value="3">Comandante</option>
                        <option value="4">Comandante 2°</option>
                        <option value="5">Comandante 3°</option>
                        <option value="6">Capitan</option>
                        <option value="7">Teniente 1°</option>
                        <option value="8">Teniente 2°</option>
                        <option value="9">Teniente 3°</option>
                        <option value="10">Ayudante de compañia</option>
                        <option value="11">Ayudante 2° compañia</option>
                        <option value="12">Ayudante de Coman</option>
                        <option value="13">Superintendente</option>
                        <option value="14">ViceSuperindentende</option>
                        <option value="15">Secretario Compañia</option>
                        <option value="16">Tesorero de Compañia</option>
                        <option value="18">Aspirante</option>
                        <option value="19">Director</option>
                        <option value="20">Ayudante Relaciones Públicas</option>
                        <option value="21">Consejero de Disciplina</option>
                        <option value="22">Consejero Superior de Disciplina</option>
                        <option value="23">Inspector de Material Mayor</option>
                        <option value="24">Inspector Médico</option>
                        <option value="25">Secretario General</option>
                        <option value="26">Bombero Insigne</option>
                        
                    </select>
                    <label>Cargo</label>

                </div>

                <div class="input-field col s4">
                    <select name="compañia_idcompañia">
                        <option value="" disabled selected>Selecciona Compañia</option>
                        <option value="1">Compañia 1 Tongoy</option>
                        <option value="2">Primera Compañia</option>
                        <option value="3">Segunda Compañia</option>
                        <option value="4">Tercera Compañia</option>
                        <option value="5">Cuarta Compañia</option>
                        <option value="6">Quinta Compañia</option>
                        <option value="7">Sexta Compañia</option>
                        <option value="8">Septima Compañia</option>
                        <option value="9">Octava Compañia</option>
                       
                        
                    </select>
                    <label>Compañia</label>

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



