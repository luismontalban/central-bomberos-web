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

                <h5 class="indigo-text">Ingresa la clave</h5>
                <div class="section"></div>

                <div class="container">
                    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                        <form class="col s12" method="post" action="{{route('loginaccesirena')}}">
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
                                    <i class="material-icons prefix">vpn_key</i>
                                    <input class='validate' type='password' name='password' id='password' required="required" maxlength="30" />
                                    <label for='clave'>Ingresa la clave</label>
                                </div>
                                
                            </div>

                            <br />
                            <center>
                                <div class='row'>
                                    <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Ingresar</button>
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
