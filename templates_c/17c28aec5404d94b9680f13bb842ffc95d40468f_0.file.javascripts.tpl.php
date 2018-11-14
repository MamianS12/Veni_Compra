<?php
/* Smarty version 3.1.30, created on 2018-11-14 14:54:51
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\htmlConfig\javascripts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bec292b0cc324_35457872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17c28aec5404d94b9680f13bb842ffc95d40468f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\htmlConfig\\javascripts.tpl',
      1 => 1542203170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bec292b0cc324_35457872 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_messagebox')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.messagebox.php';
?>
  <!--Estadisticas-->
  <?php echo '<script'; ?>
 src="web/js/canvasjs.min.js"><?php echo '</script'; ?>
>
  <!--Chart-->
  <?php echo '<script'; ?>
>
    window.onload = function () {
      var chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        title: {
          text: "Ventas del año"
        },
        axisY: {
          title: "Metas de ventas",
          valueFormatString: "#0,,.",
          suffix: "mn",
          stripLines: [{
            value: 3366500,
            label: "Promedio"
          }]
        },
        data: [{
          yValueFormatString: "#,### Millones",
          xValueFormatString: "YYYY",
          type: "spline",
          dataPoints: [
            { x: new Date(2002, 0), y: 2506000 },
            { x: new Date(2003, 0), y: 2798000 },
            { x: new Date(2004, 0), y: 3386000 },
            { x: new Date(2005, 0), y: 6944000 },
            { x: new Date(2006, 0), y: 6026000 },
            { x: new Date(2007, 0), y: 2394000 },
            { x: new Date(2008, 0), y: 1872000 },
            { x: new Date(2009, 0), y: 2140000 },
            { x: new Date(2010, 0), y: 7289000 },
            { x: new Date(2011, 0), y: 4830000 },
            { x: new Date(2012, 0), y: 2009000 },
            { x: new Date(2013, 0), y: 2840000 },
            { x: new Date(2014, 0), y: 2396000 },
            { x: new Date(2015, 0), y: 1613000 },
            { x: new Date(2016, 0), y: 2821000 },
            { x: new Date(2017, 0), y: 2000000 }
          ]
        }]
      });
      chart.render();

    }
  <?php echo '</script'; ?>
>
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
 type="text/javascript" src="web/js/init.js"><?php echo '</script'; ?>
>

   <?php echo smarty_function_messagebox(array('id'=>$_smarty_tpl->tpl_vars['cod_message']->value),$_smarty_tpl);
}
}
