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

<body id="background">

  <!--Barra navegacion-->
  <nav id="nav-registro">
    <div class="nav-wrapper">
      <div class="container">
        <a href="#" class="brand-logo">Logo</a>
        <a href="" class="sidenav-trigger" data-target="menu">
          <i class="material-icons">menu</i>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#">Ayuda <i class="material-icons right">help</i></a></li>
          <li><a href="#">Contactanos <i class="material-icons right">contacts</i></a></li>
          <li><a href="#">Login<i class="material-icons right">account_circle</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <br><br>

  <div class="container">
    <div class="row">
      <div class="col s12 m6 l4">
        <div class="card-panel hoverable">
          <div class="card-content">
            <span>
              Registrarse
            </span>
          </div>
          <br>
          <form action="">
            <div class="input-field">
              <input type="text" id="nombres" />
              <label for="nombres">Nombres y apellidos</label>
            </div>
            <div class="input-field">
              <input type="email" id="email" />
              <label for="email">Correo electronico</label>
            </div>
            <div class="input-field">
              <input type="email" id="emailc" />
              <label for="emailc">Confirme correo electronico</label>
            </div>
            <div class="input-field">
              <input type="text" id="direccion" />
              <label for="direccion">Direccion</label>
            </div>
            <div class="input-field">
              <input type="password" id="contraseña" />
              <label for="contraseña">Contraseña</label>
            </div>
            <div class="input-field">
              <input type="password" id="contraseñac" />
              <label for="contraseñac">Confirme contraseña</label>
            </div>
            <button href="" class="btn right">Enviar<i class="material-icons left">send</i></button>
          </form>
          <br><br>
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