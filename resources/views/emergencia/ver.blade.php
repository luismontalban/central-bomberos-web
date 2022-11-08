@include('layout.master')

    

        <div class="container">




            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Clave</th>
                        <th>Dirección</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($emergencias as $emergencia)
                    <tr>
                        <td>{{$emergencia->idemergencia}}</td>
                        <td>{{$emergencia->clave_emer}}</td>
                        <td>{{$emergencia->direc_emer}}</td>
                        <td>{{$emergencia->fecha_emer}}</td>
                        <td>{{$emergencia->descripcion}}</td>
                        <td>{{$emergencia->estado}}</td>
                        <td><a href="{{ action('EmergenciaController@edit', ['idemergencia' => $emergencia->idemergencia])}}"class="waves-effect waves-light btn-small"><i class="material-icons left">autorenew</i>Actualizar</a></td>
                    </tr>
                  @endforeach


                </tbody>
            </table>



        </div>





    </body>






   @include('layout.final')