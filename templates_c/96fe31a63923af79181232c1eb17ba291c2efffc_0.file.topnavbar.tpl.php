<?php
/* Smarty version 3.1.30, created on 2018-11-14 19:21:59
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\htmlConfig\topnavbar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bec67c786ee38_79304285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96fe31a63923af79181232c1eb17ba291c2efffc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\htmlConfig\\topnavbar.tpl',
      1 => 1542219713,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec67c786ee38_79304285 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_tools_ancla')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tools_ancla.php';
?>
 <header class="main-header">
 	
	<nav class="nav-extended">
		<div class="container row">
			<div class="nav-wrapper">
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
				<li><a href="admin.html">Agotados <span class="new badge">10</span></a></li>
				<li><a class='dropdown-trigger' href='#' data-target='usuario'>Administrador<i class="material-icons right">arrow_drop_down</i></a></li>
				</ul>
			</div>
			<div class="nav-wrapper center">
				<?php echo smarty_function_tools_ancla(array('ul_class'=>"left hide-on-med-and-down",'li_class'=>"tab col 3,tab col 2,tab col 3,tab col 2,tab col 3",'href'=>"#proveedor,#crearpro,index.php?action=CmdDefaultProv,#crearpro,#",'labels'=>"inven,compras,prove,prod,con_usu",'id'=>"prueba1,prueba2,prueba3,prueba4,prueba5"),$_smarty_tpl);?>

			</div>
		</div>
  	</nav>
  
  <!--Menu lateral-->
  <ul class="sidenav" id="menu">
    <li><a href="admin.html">Gestion</a></li>
    <li><a href="index.html">Salir</a></li>
  </ul>
  
  <!-- Campos dropdown -->
  <ul id='usuario' class='dropdown-content'>
    <li><a href="admin_index.html">Gestion</a></li>
    <li><a href="index.html">Salir</a></li>
  </ul>

 </header><?php }
}
