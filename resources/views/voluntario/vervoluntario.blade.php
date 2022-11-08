@include('layout.master')

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




            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Rut</th>
                        <th>Nombres</th>
                        <th>Apellido</th>
                        
                        <th>Fecha Nac</th>
                        <th>Estado de Voluntario</th>
                        <th>Fecha Ingreso</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($voluntarios as $voluntario)
                    <tr>
                        <td>{{$voluntario->rut}}</td>
                        <td>{{$voluntario->nombres}}</td>
                        <td>{{$voluntario->ape_paterno}}</td>
                        
                        <td>{{$voluntario->fech_nac}}</td>
                        <td>{{$voluntario->estado_voluntario}}</td>
                        <td>{{$voluntario->fech_ingreso}}</td>
                    
                        <td><a href="#!"class="waves-effect waves-light btn-small"><i class="material-icons left">autorenew</i>Actualizar</a></td>
                        <td><a href="#!"class="waves-effect waves-light btn-small"><i class="material-icons left">description</i>Reporte</a></td>
                    </tr>
                  @endforeach


                </tbody>
            </table>

            <br>
            
            {{$voluntarios->links('vendor.pagination.materializecss')}}


        </div>





    </body>






   @include('layout.final')