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

    <!--Barra navegacion-->
    <nav>
        <div class="nav-wrapper">
            <div class="container">
                <a href="usuario_index.html" class="brand-logo">Logo</a>
                <a href="" class="sidenav-trigger" data-target="menu">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#">Ayuda <i class="material-icons right">help</i></a></li>
                    <li><a href="#">Contactanos <i class="material-icons right">contacts</i></a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='usuario'>John Doe <i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Campos dropdown -->
    <ul id='usuario' class='dropdown-content'>
        <li><a href="cuenta.html">Cuenta</a></li>
        <li><a href="factura.html">Facturas</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="reportar.html">Reportar</a></li>
        <li><a href="carrito.html">Carrito</a></li>
        <li><a href="index.html">Salir</a></li>
    </ul>
    

    <br><br><br>

    <div class="container">
        <div class="row">
            <div class="col s10 m8 offset-m4 l6 offset-l3">
                <div class="card-panel hoverable">
                    <div class="card-content">
                        <span>

                        </span>
                        <br>
                        <form action="">
                            <div class="input-field">
                                <input type="number" id="factura" />
                                <label for="factura">Numero factura</label>
                            </div>
                            <div class="input-field">
                                <textarea id="inconformidad" class="materialize-textarea"></textarea>
                                <label for="inconformidad">su incoformidad</label>
                            </div>
                            <div class="file-field input-field">
                                <div class="btn-small">
                                    <span>Imagen producto</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <a href="#" class="btn right" type="submit">Enviar<i class="material-icons left">send</i></a>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <!--Componentes js-->
    <script type="text/javascript" src="web/js/init.js"></script>
</body>

</html>