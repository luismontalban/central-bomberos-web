@include('layout.master')

<div class="container">

    <div>
        <h5 class="center-align">Emergencias Activas</h5>




    </div>
    <br/>
</div>




<div class="container">




    <table class="responsive-table">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Dirección</th>
                <th>Fecha</th>
                <th>Descripción</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            @foreach($emergencias as $emer)
            <tr>
                <td>{{$emer->clave_emer}}</td>
                <td>{{$emer->direc_emer}}</td>
                <td>{{$emer->fecha_emer}}</td>
                <td>{{$emer->descripcion}}</td>
                <td>{{$emer->estado}}</td>
            </tr>
            @endforeach


        </tbody>
       
    </table>
    </br>
    
<!--     {{$emergencias->links('vendor.pagination.materializecss')}}-->


</div>


<br/>

<div class="container">

    <div>
        <h5 class="center-align">Ultimas Emergencias</h5>

    </div>
    <br/>
</div>




<div class="container">


    <table class="responsive-table">
        <thead>
            <tr>
                <th>Clave</th>
                <th>Dirección</th>
                <th>Fecha</th>
                <th>Descripción</th>

            </tr>
        </thead>

        <tbody>
            @foreach($emerul as $emerultimas)
            <tr>
                <td>{{$emerultimas->clave_emer}}</td>
                <td>{{$emerultimas->direc_emer}}</td>
                <td>{{$emerultimas->fecha_emer}}</td>
                <td>{{$emerultimas->descripcion}}</td>
            </tr>
            @endforeach

        </tbody>


    </table>
    
    </br>

    
     {{$emerul->links('vendor.pagination.materializecss')}}
    
   



</div>








</body>






@include('layout.final')