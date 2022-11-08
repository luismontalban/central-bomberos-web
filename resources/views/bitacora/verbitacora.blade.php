@include('layout.master')

    

        <div class="container">




            <table class="responsive-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Maquinista</th>
                        <th>Obac</th>
                        <th>Fecha Salida</th>
                        <th>N° Voluntarios</th>
                        <th>Destino</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($bitacoras as $bitacora)
                    <tr>
                        <td>{{$bitacora->idbitacora}}</td>
                        <td>{{$bitacora->maquinista}}</td>
                        <td>{{$bitacora->obac}}</td>
                        <td>{{$bitacora->fecha_salida}}</td>
                        <td>{{$bitacora->cant_voluntarios}}</td>
                        <td>{{$bitacora->destino}}</td>
                        <td><a href="{{ action('BitacoraController@editbita', ['idbitacora' => $bitacora->idbitacora])}}"class="waves-effect waves-light btn-small"><i class="material-icons left">autorenew</i>Actualizar</a></td>
                    </tr>
                  @endforeach


                </tbody>
            </table>



        </div>





    </body>






   @include('layout.final')