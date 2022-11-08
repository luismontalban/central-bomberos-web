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
                <h2 class="center-align">CentralBomberosWeb</h5>

            </div>
            
            <br/>
        </div>
        
        <div class="container">
            
            <div>
                <h4 class="center-align">
                
        
       Central Bomberos Web es una aplicación web que nace por la necesidad 
       del Cuerpo de Bomberos de la ciudad de Ovalle en tener una mejor gestion y control
       de la informacion referente a todas sus actividades y que haceres cuando estos acuden
       a una emergencia, mediante este sistema podran tener toda la informacion guardada y 
       gestionarla de una forma mucho mas optimizada.
        
        
        
          
                    
                </h3>   
            </div> 
            
        </div>


       
    

        <br/>
      



       


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




