<?php
/* Smarty version 3.1.30, created on 2018-11-06 23:37:27
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\Form_TopMenu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be217a7456794_24027950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b5c7af8bcefbb59a7f50e7d168f4bc9fe0d37da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\Form_TopMenu.tpl',
      1 => 1541265122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be217a7456794_24027950 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_usuario')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.usuario.php';
?>
<link href="web/css/template.css" rel="stylesheet" type="text/css" />

  <?php echo '<script'; ?>
 type="text/javascript" src="web/js/common.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="web/js/menu.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript" src="web/js/fat.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="web/js/index.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
 type="text/javascript" src="web/js/blockrightmouse1.js"><?php echo '</script'; ?>
>

  <div id="border-top">

   <div>

    <div>
       <!--
       <span class="version">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Version 1.0.0</span>
       -->
    </div>

   </div>

  </div><!-- End div boder-top -->

  <div id="header-box">

     <div id="module-status"> 

		<span class="loggedin-users" title='<?php echo smarty_function_usuario(array(),$_smarty_tpl);?>
'>Bienvenido : <?php echo smarty_function_usuario(array(),$_smarty_tpl);?>
</span><span class="logout"><a href="#" onClick="top.window.location.href = '../auth/index.php';">Salir</a></span>

     </div>

     <div id="module-menu">

        <ul id="menu" >

          <li class="node"><a>Menu</a>

              <ul id="menu-home">

                 <li><a class="icon-16-help" href="index.php?action=default">Principal/Main</a></li>

              </ul>

          </li>

        </ul>



     </div>



     <div class="clr"></div>

   </div> <!-- end div herder-box -->

 <!--

   <div id="content-box">



   

      <div class="border">

 -->



<?php }
}
