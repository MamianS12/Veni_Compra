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
        <a href="index.html" class="brand-logo" id="logo">Logo</a>
        <div class="left" style="width: 100%;">
          <form>
            <div class="input-field" style="display:none;" id="bar-search">
              <input id="search-txt" type="search" required>
              <label class="label-icon" for="search-txt"><i class="material-icons">search</i></label>
              <i class="material-icons" id="close">close</i>
            </div>
          </form>
        </div>
        <a href="#" class="sidenav-trigger" data-target="menu">
          <i class="material-icons">menu</i>
        </a>
        <div class="right hide-on-large-only">
          <ul>
            <li><a href="#" id="search-icon-s"> <i class="material-icons">search</i></a></li>
          </ul>
        </div>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="#" id="search-icon"> <i class="material-icons">search</i></a></li>
          <li><a href="iniciar.html">Iniciar<i class="material-icons right">account_circle</i></a></li>
          <li><a href="registro.html">Registrarse<i class="material-icons right">account_circle</i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!--Menu lateral-->
  <ul class="sidenav" id="menu">
    <li><a href="iniciar.html">Iniciar<i class="material-icons">contacts</i></a></li>
    <li><a href="registro.html">Registrarse<i class="material-icons">account_circle</i></a></li>
  </ul>

  <div class="container">
    <br>
    <br>
    <div class="row">
      <div class="col s4 m3 l2">
        <aside>
          <div class="input-field">
            <input type="number" id="inicio">
            <label for="inicio">Desde</label>
          </div>
          <div class="input-field">
            <input type="number" id="hasta">
            <label for="hasta">Hasta</label>
          </div>
          <div class="input-field">
            <select>
              <option value="" disabled selected>Categorias</option>
              <option value="1">Mascotas</option>
              <option value="2">Comics</option>
              <option value="3">Otra huevonada</option>
            </select>
            <label>Seleccion</label>
          </div>
        </aside>
      </div>

      <div class="col l10 ">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div class="row">
              <div class="col s4 m3 l2">
                <img src="https://cdn.samsung.com/etc/designs/smg/global/imgs/Social_Image_Samsung_TV_PF.jpg" alt=""
                  class="responsive-img materialboxed">
              </div>
              <div class="col s3 m3 l10">
                <a href="producto.html"><span style="margin-left: 5px; font-size: 20px; color: #F9034F;">Pc Gamer Glacius Two - Gtx 1050ti 4gb +
                    Core I5,
                    8gb, 1tb</span></a>
                <br><br>
                <span style="margin: 5px;">250.000$</span>
                <br><br>
                <a href="generar.html" class="btn right" style="margin-left: 20px;">Comprar<i class="material-icons small left">monetization_on</i></a>
                <a href="#" class="btn right">Agregar<i class="material-icons small left">add_shopping_cart</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col l10 offset-l2">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div class="row">
              <div class="col s4 m3 l2">
                <img src="https://cdn.samsung.com/etc/designs/smg/global/imgs/Social_Image_Samsung_TV_PF.jpg" alt="" class="responsive-img materialboxed">
              </div>
              <div class="col s3 m3 l10">
                <a href="producto.html"><span style="margin-left: 5px; font-size: 20px; color: #F9034F;">Pc Gamer Glacius Two - Gtx 1050ti 4gb + Core I5,
                  8gb, 1tb</span></a>
                <br>
                <br>
                <span style="margin: 5px;">250.000$</span>
                <br><br>
                <a href="generar.html" class="btn right" style="margin-left: 20px;">Comprar<i class="material-icons small left">monetization_on</i></a>
                <a href="#" class="btn right">Agregar<i class="material-icons small left">add_shopping_cart</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col l10 offset-l2">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div class="row">
              <div class="col s4 m3 l2">
                <img src="https://cdn.samsung.com/etc/designs/smg/global/imgs/Social_Image_Samsung_TV_PF.jpg" alt="" class="responsive-img materialboxed">
              </div>
              <div class="col s3 m3 l10">
                <a href="producto.html"><span style="margin-left: 5px; font-size: 20px; color: #F9034F;">Pc Gamer Glacius Two - Gtx 1050ti 4gb +
                    Core I5,
                    8gb, 1tb</span></a>
                <br><br>
                <span style="margin: 5px;">250.000$</span>
                <br><br>
                <a href="generar.html" class="btn right" style="margin-left: 20px;">Comprar<i class="material-icons small left">monetization_on</i></a>
                <a href="#" class="btn right">Agregar<i class="material-icons small left">add_shopping_cart</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col l10 offset-l2">
        <div class="card-panel hoverable">
          <div class="card-content">
            <div class="row">
              <div class="col s4 m3 l2">
                <img src="https://cdn.samsung.com/etc/designs/smg/global/imgs/Social_Image_Samsung_TV_PF.jpg" alt="" class="responsive-img materialboxed">
              </div>
              <div class="col s3 m3 l10">
                <a href="producto.html"><span style="margin-left: 5px; font-size: 20px; color: #F9034F;">Pc Gamer Glacius Two - Gtx 1050ti 4gb +
                    Core I5,
                    8gb, 1tb</span></a>
                <br><br>
                <span style="margin: 5px;">250.000$</span>
                <br><br>
                <a href="generar.html" class="btn right" style="margin-left: 20px;">Comprar<i class="material-icons small left">monetization_on</i></a>
                <a href="#" class="btn right">Agregar<i class="material-icons small left">add_shopping_cart</i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">

  </div>
  <div class="row">
    <div class="col l9 offset-l3">
      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
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