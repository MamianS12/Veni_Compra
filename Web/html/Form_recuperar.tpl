<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Estilos personalizados-->
    <link rel="stylesheet" type="text/css" href="web/css/style.css">
    <!--Fuente roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="index.html" class="brand-logo">Logo</a>
    
                <a href="" class="sidenav-trigger" data-target="menu">
                    <i class="material-icons">menu</i>
                </a>
    
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Ayuda <i class="material-icons right">help</i></a></li>
                    <li><a href="#">Contactanos <i class="material-icons right">contacts</i></a></li>
                    <li><a href="iniciar.html">Iniciar<i class="material-icons right">account_circle</i></a></li>
                    <li><a href="registro.html">Registrarse<i class="material-icons right">account_circle</i></a></li>
                </ul>
    
            </div>
        </div>
    </nav>

    <br><br><br><br>


    <!--Formulario recuperacion-->
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3 l4 offset-l4">
                <div class="card-panel hoverable">
                    <div class="card-content">
                        <span>
                            Por favor, introduce la direccion de correo electronico con el que hiciste el registro en veni
                            compra
                            enviaremos a tu correo una nueva contraseña temporal para tu cuenta, que luego puedes cambiar.
                        </span>
                    </div>
                    <br>
                    <form action="">
                        <div class="input-field">
                            <input type="email" id="email" />
                            <label for="email">Correo electronico</label>
                        </div>
                        <button href="" class="btn right">Enviar<i class="material-icons left">send</i></button>
                    </form>
                    <br><br>

                </div>
            </div>
        </div>
    </div>

    <!--Menu lateral-->
    <ul class="sidenav" id="menu">
        <li><a href="">Ayuda<i class="material-icons">help</i></a></li>
        <li><a href="">Contactanos<i class="material-icons">contacts</i></a></li>
        <li><a href="">Login<i class="material-icons">account_circle</i></a></li>
    </ul>


    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!--Componentes js-->
    <script type="text/javascript" src="web/js/init.js"></script>
</body>

</html>