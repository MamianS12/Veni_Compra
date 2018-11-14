<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       <!-- Compiled and minified CSS -->
		  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!--Estilos personalizados-->
      <link rel="stylesheet" type="text/css" href="web/css/style.css">
      <!--Fuente montserrat-->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
        <li><a href="#!">Carrito</a></li>
        <li><a href="index.html">Salir</a></li>
      </ul>

      <div class="container">
        <div class="row">
          <div class="col s12 m12 l12">
            <div class="card-panel hoverable">
              <div class="card-content">
                <p>Facturas</p>
                <table class="responsive-table">
                  <thead>
                    <tr>
                      <th>Id factura</th>
                      <th>Fecha</th>
                      <th>Precio total</th>
                      <th>Accion</th>
                    </tr>
                  </thead>
            
                  <tbody>
                    <tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                      <td>
                        <a href="" class="btn-floating"><i class="material-icons">remove_red_eye</i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Alan</td>
                      <td>Jellybean</td>
                      <td>$3.76</td>
                      <td>
                        <a href="" class="btn-floating"><i class="material-icons">remove_red_eye</i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Jonathan</td>
                      <td>Lollipop</td>
                      <td>$7.00</td>
                      <td>
                        <a href="" class="btn-floating"><i class="material-icons">remove_red_eye</i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <br><br>
                <p>Detalle factura</p>
                <table class="responsive-table">
                  <thead>
                    <tr>
                      <th>Id factura</th>
                      <th>Fecha</th>
                      <th>Nombre producto</th>
                      <th>Cantidad</th>
                      <th>Precio unitario</th>
                      <th>Precio total</th>
                    </tr>
                  </thead>
                
                  <tbody>
                    <tr>
                      <td>Alvin</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                      <td>$0.87</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                    </tr>
                    <tr>
                      <td>Alan</td>
                      <td>Jellybean</td>
                      <td>$3.76</td>
                      <td>$0.87</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                    </tr>
                    <tr>
                      <td>Jonathan</td>
                      <td>Lollipop</td>
                      <td>$7.00</td>
                      <td>$0.87</td>
                      <td>Eclair</td>
                      <td>$0.87</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <button class="btn right">Imprimir factura</button>
                <br>
                <br>

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