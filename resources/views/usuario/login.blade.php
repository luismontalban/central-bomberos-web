<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <meta charset="UTF-8" >
    </head>

    <body>


        <div class="section"></div>
        <main>
            <center>
                <img class="responsive-img" style="width: 250px;" src="" />
                <div class="section"></div>

                <h5 class="indigo-text">Inicia Sesión en tu Cuenta</h5>
                <div class="section"></div>

                <div class="container">
                    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                        <form class="col s12" method="post" action="{{route('logueo')}}">
                            @csrf
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                            @endif

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <i class="material-icons prefix">account_box</i>

                                    <input class='validate' type='text' name='rut' id='rut' required="required" maxlength="10" />
                                    <label for='rut'>Ingresa tu Rut</label>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input class='validate' type='password' name='password' id='password' required="required" maxlength="30" />
                                    <label for='clave'>Ingresa tu Contraseña</label>
                                </div>
                                <label style='float: right;'>
                                    <a class='pink-text' href='#!'><b>Olvidaste tu Contraseña?</b></a>
                                </label>
                            </div>

                            <br />
                            <center>
                                <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Iniciar Sesión</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>

            </center>

            <div class="section"></div>
            <div class="section"></div>
        </main>






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
