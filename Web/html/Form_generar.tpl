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

  <div class="container">
    <div class="row">
      <div class="col s12 ">
        <div class="card-panel hoverable">
          <div class="card-content">
            <form action="">
              <div class="input-field">
                <input type="text" id="direccion">
                <label for="direccion">Direccion de llegada</label>
              </div>
              <label for="">Metodo de pago</label>
              <br><br>
              <span>
                <label>
                  <input name="group1" type="radio" />
                  <span>MasterCard</span>
                </label>
              </span>
              <span>
                <label>
                  <input name="group1" type="radio" />
                  <span>Maestro</span>
                </label>
              </span>
              <br><br>
              <div class="input-field">
                <input type="number" id="tarjeta">
                <label for="tarjeta">Numero de tarjeta</label>
              </div>

              <label for="">Items en carrito de compra</label>
              <table class="responsive-table">
                <thead>
                  <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td>Alvin</td>
                    <td>
                      <div class="input-field">
                        <input type="number" id="cantidad" style="width:50px;">
                      </div>
                    </td>
                    <td>
                      <a href="" class="btn-floating"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Alvin</td>
                    <td>
                      <div class="input-field">
                        <input type="number" id="cantidad" style="width:50px;">
                      </div>
                    </td>
                    <td>
                      <a href="" class="btn-floating"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Alvin</td>
                    <td>
                      <div class="input-field">
                        <input type="number" id="cantidad" style="width:50px;">
                      </div>
                    </td>
                    <td>
                      <a href="" class="btn-floating"><i class="material-icons">delete</i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <span>Total 12345</span>
              <a href="" class="btn right" type="submit" style="margin-left: 10px;">Comprar</a>
              <a href="usuario_index.html" class="btn right" type="submit">Cancelar</a>
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