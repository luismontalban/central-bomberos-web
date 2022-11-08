@include('layout.master')

    

        <div class="container">




            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Clave Acto</th>
                        <th>Dirección</th>
                        <th>Fecha</th>
                        <th>Se Trato De</th>
                        <th>Oficial a Cargo</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($partes as $parte)
                    <tr>
                        <td>{{$parte->idpemergencia}}</td>
                        <td>{{$parte->clave_acto}}</td>
                        <td>{{$parte->direccion}}</td>
                        <td>{{$parte->fecha}}</td>
                        <td>{{$parte->se_trato_de}}</td>
                        <td>{{$parte->oficial_cargo}}</td>
                        
                        <td><a href="{{ action('ParteController@editp', ['idpemergencia' => $parte->idpemergencia])}}"class="waves-effect waves-light btn-small"><i class="material-icons left">autorenew</i>Actualizar</a></td>
                        <td><a href="#!"class="waves-effect waves-light btn-small"><i class="material-icons left">visibility</i>Ver parte</a></td>
                        <td><a href="#!"class="waves-effect waves-light btn-small"><i class="material-icons left">print</i>Reporte</a></td>
                    </tr>
                  @endforeach


                </tbody>
            </table>



        </div>





    </body>






   @include('layout.final')