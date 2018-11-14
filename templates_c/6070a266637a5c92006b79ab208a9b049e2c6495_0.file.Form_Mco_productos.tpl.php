<?php
/* Smarty version 3.1.30, created on 2018-11-06 23:37:27
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\Form_Mco_productos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5be217a73a7416_47260319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6070a266637a5c92006b79ab208a9b049e2c6495' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\Form_Mco_productos.tpl',
      1 => 1541265116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Form_TopMenu.tpl' => 1,
    'file:Form_FooterMenu.tpl' => 1,
  ),
),false)) {
function content_5be217a73a7416_47260319 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\block.form.php';
if (!is_callable('smarty_function_tools_barstandardsp')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tools_barstandardsp.php';
if (!is_callable('smarty_function_textfield')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.textfield.php';
if (!is_callable('smarty_function_tooltip')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tooltip.php';
if (!is_callable('smarty_function_hidden')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.hidden.php';
if (!is_callable('smarty_function_messagebox')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.messagebox.php';
if (!is_callable('smarty_function_spyro_info')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.spyro_info.php';
?>

<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "Templates.lan", "mco_productos", 0);
?>

<html>
<head>
      <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>
</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <?php echo '<script'; ?>
 language='JavaScript' src='web/js/disableButtons.js'><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 language='JavaScript' src='web/js/overlib.js'><?php echo '</script'; ?>
>
	  
</head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class1=adminlist>
  <tr>
    <td align="center">
       <table width="1024" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>
               <?php $_smarty_tpl->_subTemplateRender("file:Form_TopMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"frmMco_productos",'method'=>"post"));
$_block_repeat1=true;
echo smarty_block_form(array('name'=>"frmMco_productos",'method'=>"post"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>


   <?php echo smarty_function_tools_barstandardsp(array('type'=>"Button",'reference_id'=>100,'form_name'=>"frmMco_productos",'commands'=>"vc2CmdAddMco_productos,vc2CmdShowListMco_productos,vc2CmdHelpMco_productos",'images'=>"save_f2.png,back_f2.png,help_f2.png",'titles'=>"save,back,help"),$_smarty_tpl);?>


   <div class="main">
		<table class="adminheading">
		<tr>
			<th class="frontpage" rowspan="2">
            <img src="./web/images/menu/menu.png" </img>
			<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'TITLE');?>

            </th>

		</tr>

		</table>

  <div>

<table border="0" align="center" width=50% class="adminform">



   


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDU_ID');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__PDU_ID",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"PDU_ID"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDU_NOMBRE');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__PDU_NOMBRE",'class'=>"campos",'maxlength'=>"45"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"PDU_NOMBRE"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDU_DESCRIPCION');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__PDU_DESCRIPCION",'class'=>"campos",'maxlength'=>"150"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"PDU_DESCRIPCION"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDU_IMAGENPRODU');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__PDU_IMAGENPRODU",'class'=>"campos",'maxlength'=>"200"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"PDU_IMAGENPRODU"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'PDU_STOCKMINIMO');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__PDU_STOCKMINIMO",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"PDU_STOCKMINIMO"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SUB_NOMBRECAT');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__SUB_NOMBRECAT",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"SUB_NOMBRECAT"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SUB_UNIMEDIDA');?>
</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__SUB_UNIMEDIDA",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"SUB_UNIMEDIDA"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SUB_TALLA');?>
</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__SUB_TALLA",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"SUB_TALLA"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SUB_GENERO');?>
</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__SUB_GENERO",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"SUB_GENERO"),$_smarty_tpl);?>
</td>
   </tr>


   <tr>
      <td class="dvtCellLabel"><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'SUB_ESTADO');?>
(*)</td>
      <td class="dvtCellInfo"><?php echo smarty_function_textfield(array('name'=>"mco_productos__SUB_ESTADO",'class'=>"campos",'maxlength'=>"10",'typeData'=>"int"),$_smarty_tpl);
echo smarty_function_tooltip(array('code'=>"SUB_ESTADO"),$_smarty_tpl);?>
</td>
   </tr>
</table>



<?php echo smarty_function_hidden(array('name'=>"action",'value'=>''),$_smarty_tpl);?>

<?php echo smarty_function_hidden(array('name'=>"section_language",'value'=>"Mco_productos"),$_smarty_tpl);?>

<?php $_block_repeat1=false;
echo smarty_block_form(array('name'=>"frmMco_productos",'method'=>"post"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


   <?php echo smarty_function_messagebox(array('id'=>$_smarty_tpl->tpl_vars['cod_message']->value),$_smarty_tpl);?>


<?php echo smarty_function_spyro_info(array(),$_smarty_tpl);?>


<div id="border-bottom">
    <div>
      <div>
      </div>
      </div>
  </div>

          </td>
       </tr>
      </table>
            <?php $_smarty_tpl->_subTemplateRender("file:Form_FooterMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <td>
  <tr>
</table>

</body>
</html>
<?php }
}
