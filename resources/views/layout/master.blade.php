<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta charset="UTF-8" >
    </head>

    <body>
        
         
<!--<ul id="dropdownuser" class="dropdown-content">
  <li><a href="#!">Mis Datos</a></li>
  <li><a href="{{route('salir')}}">Cerrar Sesión</a></li>
  <li class="divider"></li>
  
</ul>-->


        <!-- Dropdown Structure Bitacora -->
      
        <ul id="dropdown1" class="dropdown-content">
             
            <li><a href="{{route('bitacoram')}}">Ingresar Bitacora</a></li>
            <li><a href="{{route('verbita')}}">Ver Bitacoras</a></li>
            
            <li class="divider"></li>

        </ul>
       

        <!-- Dropdown Structure Emergency -->

        <ul id="dropdown2" class="dropdown-content">
            <li><a href="{{route('emergencia')}}">Ingresar Emergencia</a></li>
            <li><a href="{{route('menuver')}}">Ver Emergencias</a></li>
            <li class="divider"></li>

        </ul>

        <!-- Dropdown Structure Part Emergency -->

        <ul id="dropdown3" class="dropdown-content">
           
            <li><a href="{{route('generarparte')}}">Ingresar Parte</a></li>
            <li><a href="#!">Ingresar Parte de rescate</a></li>
           
            <li><a href="{{route('verp')}}">Ver Partes</a></li>
            <li class="divider"></li>
           
           
        </ul>

         <!-- Dropdown Structure Part Emergency -->

        <ul id="dropdown4" class="dropdown-content">
           
            <li><a href="{{route('volm')}}">Ingresar Voluntario</a></li>
            <li><a href="{{route('verbitacorass')}}">Ver Voluntarios</a></li>
           
            <li><a href="#">Ingresar Asistencia</a></li>
            <li class="divider"></li>
           
           
        </ul>

            

        
        
        
<!--        <ul id="dropdownres" class="dropdown-content">
  <li><a href="#!">Mis Datos</a></li>
  
  <li class="divider"></li>
  
</ul>-->

       
        <!-- Dropdown Structure Bitacora -->

        <ul id="dropdown1r" class="dropdown-content">
            <li><a href="{{route('bitacoram')}}">Ingresar Bitacora</a></li>
            
            <li><a href="{{route('verbita')}}">Ver Bitacoras</a></li>
            <li class="divider"></li>
            

        </ul>
         



        <!-- Dropdown Structure Emergency -->

        <ul id="dropdown2r" class="dropdown-content">
            <li><a href="{{route('emergencia')}}">Ingresar Emergencia</a></li>
            <li><a href="{{route('menuver')}}">Ver Emergencias</a></li>
            <li class="divider"></li>

        </ul>
        
         
        <!-- Dropdown Structure Part Emergency -->
         
        <ul id="dropdown3r" class="dropdown-content">
             
            <li><a href="{{route('generarparte')}}">Ingresar Parte</a></li>
            
            <li><a href="{{route('verp')}}">Ver Partes</a></li>
            <li class="divider"></li>
            

        </ul>
       
        
         <ul id="dropdown4r" class="dropdown-content">
           
            <li><a href="{{route('volm')}}">Ingresar Voluntario</a></li>
            <li><a href="{{route('verbitacorass')}}">Ver Voluntarios</a></li>
           
            <li><a href="#">Ingresar Asistencia</a></li>
            <li class="divider"></li>
           
           
        </ul>









        <nav>
            <div class="nav-wrapper">
                @if(auth()->user())
                <a href="{{route ('init')}}" class="brand-logo"><i class="large material-icons">fireplace</i>CBWEB</a>
                @else
                <a href="{{route ('principal')}}" class="brand-logo"><i class="large material-icons">fireplace</i>CBWEB</a>
                @endif
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                
          
                   
                <ul class="right hide-on-med-and-down">
                   
                    <li><a href="{{route('initsirena')}}"class="waves-effect waves-light btn"><i class="material-icons right">notifications_active</i>Sirena</a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">Modulos<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Bitacoras<i class="material-icons right">arrow_drop_down</i></a></li>
                    
                    <li><a class="dropdown-trigger" href="#" data-target="dropdown2">Emergencias<i class="material-icons right">arrow_drop_down</i></a></li>
                
                    <!-- Dropdown Trigger -->
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Partes de Emergencia<i class="material-icons right">arrow_drop_down</i></a></li>
<!--                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown4">Registrar Usuario<i class="material-icons right">arrow_drop_down</i></a></li>-->
                    
                  <li><a href="#!">{{ auth()->user()->rut }}</a></li>
                   
                    <!-- Dropdown Trigger -->
<!--      <li><a class="dropdown-trigger" href="#!" data-target="dropdownuser"> <i class="material-icons right">arrow_drop_down</i></a></li>-->
                 
                   



                  <li><a href="{{route('salir')}}" class="waves-effect waves-light btn">Cerrar Sesión <i class="material-icons right">power_settings_new</i></a></li>
                </ul>

            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
              <li><a href="#!">{{ auth()->user()->rut }}</a></li>
              <li><a href="#" class="waves-effect waves-light btn"><i class="material-icons right">notifications_active</i>Sirena</a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown4r">Modulos<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1r">Bitacoras<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2r">Emergencia<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown3r">Parte de Emergencia<i class="material-icons right">arrow_drop_down</i></a></li>
            
<!--            <li><a class="dropdown-trigger" href="#!" data-target="dropdown4r">Registrar Usuario<i class="material-icons right">arrow_drop_down</i></a></li>-->
            <li><a href="{{route('salir')}}" class="waves-effect waves-light btn">Cerrar Sesión <i class="material-icons right">power_settings_new</i></a></li>
        </ul>

        <br/>