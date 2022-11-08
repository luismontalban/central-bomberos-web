@include('layout.master')

<div class="container">




            <table class="responsive-table">
                <thead>
                    <tr>
                       
                        <th>Dirección</th>
                        <th>Fecha</th>
                        <th>Hora Inicio</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($emergencias as $emergencia)
                    <tr>
                        
                        <td>{{$emergencia->direc_emer}}</td>
                        <td>{{$emergencia->fecha_emer}}</td>
                        <td>{{$emergencia->hora_emer}}</td>
                       
                        <td>{{$emergencia->estado}}</td>
                        <td><a href="{{ action('ParteController@edit', ['idemergencia' => $emergencia->idemergencia])}}"class="waves-effect waves-light btn-small"><i class="material-icons left">autorenew</i>Generar Parte</a></td>
                    </tr>
                  @endforeach


                </tbody>
            </table>



        </div>

@include('layout.final')
