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

  <div class="container">
    <div class="row">
      <br>
      <div class="col s7 m5 l4">
        <img src="http://counciltool.com/wp-content/uploads/2015/12/jp20hb245.jpg" alt="" class="responsive-img materialboxed">
      </div>
      <div class="col s1 m1 l1"></div>

      <div class="col s4 m6 l6">
        <p style="padding: 0px;">Nombre producto</p>
        <span>
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna
          aliqecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
        </span>
        <br><br>
        <span>Metodos de pago <i class="material-icons left">payment</i></span>
        <br>
        
        <img src="img/icons/mastercard.svg" alt="" style="height: 60px;">
        <img src="img/icons/maestro.svg" alt="" style="height: 60px;">
        <span class="right" style="font-size: 25px; color: #F9034F">150.000 lucas</span>
        <br>
        <div class="row">
          <div class="col s8 right">
            <a href="generar.html" class="btn right">Comprar<i class="material-icons left">monetization_on</i></a>
            <a class="btn right" onclick="M.toast({html: 'Añadido al carrito de compra exitosamente'})" style="margin-right:10px;">Agregar <i class="material-icons left">add_shopping_cart</i></a>
          </div>
        </div>
        </div>
      <div class="row"></div>

      <div class="col s2 m3 l1">
        <div class="divider"></div>
        <img src="http://counciltool.com/wp-content/uploads/2015/12/jp20hb245.jpg" alt="" class="responsive-img">
      </div>

      <div class="col s2 m3 l1">
        <div class="divider"></div>
        <img src="http://counciltool.com/wp-content/uploads/2015/12/jp20hb245.jpg" alt="" class="responsive-img">
      </div>

      <div class="col s2 m3 l1">
        <div class="divider"></div>
        <img src="http://counciltool.com/wp-content/uploads/2015/12/jp20hb245.jpg" alt="" class="responsive-img">
      </div>

      <div class="col s2 m3 l1">
        <div class="divider"></div>
        <img src="http://counciltool.com/wp-content/uploads/2015/12/jp20hb245.jpg" alt="" class="responsive-img">
      </div>
    </div>
  </div>

  <div class="container">
    <p>Mas informacion del producto</p>
    <ul class="collapsible poput">
      <li>
        <div class="collapsible-header"><i class="material-icons"></i>Descripcion detallada</div>
        <div class="collapsible-body"><span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons"></i>Envios</div>
        <div class="collapsible-body"><span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
      </li>
      <li>
        <div class="collapsible-header"><i class="material-icons"></i>Empresa</div>
        <div class="collapsible-body"><span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna
            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint
            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></div>
      </li>
    </ul>
  </div>
  <br><br><br>
  <div class="container">
    <p>Comentarios</p>
    <div class="card-panel hoverable">
      <div class="row">
        <div class="col s2">
          <img  class="responsive-img circle" src="http://static.hsbnoticias.com/sites/default/files/styles/original/public/gallery/2017/10/esperanzar.jpg?itok=qeW68fbe" alt="">
        </div>
        <div class="col s10">
          <div class="card-content">
            <span class="card-title">Esperanza Gomez</span>
            <br><br>
            <span>Que rico :v</span>
          </div>
        </div>
      </div>
    </div>

    <div class="card-panel hoverable">
      <div class="row">
        <div class="col s2">
          <img class="responsive-img circle" src="http://static.hsbnoticias.com/sites/default/files/styles/original/public/gallery/2017/10/esperanzar.jpg?itok=qeW68fbe"
            alt="">
        </div>
        <div class="col s10">
          <div class="card-content">
            <span class="card-title">Esperanza Gomez</span>
            <br><br>
            <span>Que rico :v</span>
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