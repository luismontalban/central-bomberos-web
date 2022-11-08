<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
       
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>



        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo"><i class="large material-icons">fireplace</i>CBWEB</a>

                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                  
                    <li><a href="{{route('quien')}}">¿Quienes Somos?</a></li>
                    
                    <li><a href="{{action('UsuarioController@iniciar')}}" class="waves-effect waves-light btn">Iniciar Sesión <i class="material-icons right">account_circle</i></a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
           
            <li><a href="{{route('quien')}}">¿Quienes Somos?</a></li>
            
            <li><a href="{{action('UsuarioController@iniciar')}}" class="waves-effect waves-light btn">Iniciar Sesión <i class="material-icons right">account_circle</i></a></li>
        </ul>

        <br/>

        <div class="container">

            <div>
                <h5 class="center-align">CentralBomberosWeb</h5>

            </div>
            <br/>
        </div>


        <div class="container">
            <div class="row">
            
            <div class="input-field col s8">
                <select id="SelectCategory">
                    <option value="" disabled selected>Selecciona la Ciudad</option>
                    <option value="1">Coquimbo</option>
                    <option value="2">La Serena</option>
                    <option value="3">Ovalle</option>
                </select>
                <label>Ciudad</label>
            </div>
             <div class="input-field col s4">
                 <button class="btn waves-effect waves-light" type="submit" name="action">Filtrar
    <i class="material-icons right">search</i>
  </button>
        
            </div> 
                
            
             </div>
        </div>
    

        <br/>
        
         <div class="container">

            <div>
                <h5 class="center-align">Ultimas Emergencias</h5>

            </div>
            <br/>
        </div>
        
        
        
        <div class="container">


            <table class="responsive-table" id="tabla">
                <thead>
                    <tr>
                        <th>Clave</th>
                        <th>Ciudad</th>
                        <th>Direccion</th>
                        <th>Fecha</th>
                        <th>Descripción</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($datoss as $datos)
                    <tr>
                        <td>{{$datos->clave_emer}}</td>
                        <td>{{$datos->ciudad_emer}}</td>
                        <td>{{$datos->direc_emer}}</td>
                        <td>{{$datos->fecha_emer}}</td>
                        <td>{{$datos->descripcion}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>



        </div>


    </body>




    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset ('js/materialize.min.js')}}"></script>

    <script>
document.addEventListener('DOMContentLoaded', function () {
    M.AutoInit();
});

    </script>


</body>
</html>
