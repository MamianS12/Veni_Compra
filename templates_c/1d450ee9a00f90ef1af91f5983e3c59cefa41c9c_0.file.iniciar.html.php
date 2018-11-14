<?php
/* Smarty version 3.1.30, created on 2018-11-06 23:30:23
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\iniciar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be215ffbb0b08_62595930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d450ee9a00f90ef1af91f5983e3c59cefa41c9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\iniciar.html',
      1 => 1541265122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be215ffbb0b08_62595930 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"/>
      <!--Estilos personalizados-->
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <!--Fuente roboto-->
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta charset="utf-8">
    </head>

    <body>

      <a href="admin_index.html" class="btn">Administrador</a>
      <br>
      <a href="asesor_index.html" class="btn">Asesor</a>
      <br>
      <a href="usuario_index.html" class="btn">Usuario</a>

      <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col s12 m10 l5 offset-l3">
            <div class="card-panel hoverable" id="login">
              <form>
                <a href="index.html" id="back"><i class="material-icons medium">arrow_back</i></a>
                <br>
                <div class="center">
                  <img style="height: 150px; margin: 0px;" src="../images/login/user.svg" alt="">  
                </div>
                <br>
                <div class="input-field">
                  <input type="email" id="email"/>
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="password" id="pass"/>
                  <label for="pass">Contraseña</label>
                </div>
                <p>
                  <label class="right">
                    <input type="checkbox"/>
                    <span>Mantener sesion</span>
                  </label>  
                </p>
                <blockquote>
                  ¿Ha olvidado su contraseña? ¿No recuerda su correo? obtenga mas informacion de como recuperar su correo o contraseña
                  haciendo <a href="recuperar.html" style="color:#01D3F6;">Click aqui</a> 
                </blockquote>
                <a class="left btn">Sign Up</a>
                <a class="right btn">Login</a>
                <br><br>
              </form>
            </div>
          </div>
        </div>
      </div>
      
      <!--JQuery-->
      <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
      <!--JavaScript at end of body for optimized loading-->
      <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"><?php echo '</script'; ?>
>
      <!--Componentes js-->
      <?php echo '<script'; ?>
 type="text/javascript" src="../js/init.js"><?php echo '</script'; ?>
>
    </body>
  </html>
        <?php }
}
