<?php
/* Smarty version 3.1.30, created on 2018-11-14 17:18:29
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\Form_proveedor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bec4ad5d843d8_20749682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '536e2e95080fff3f18628ea5ba60767abd92a063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\Form_proveedor.tpl',
      1 => 1542212258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Form_default_gestion.tpl' => 1,
  ),
),false)) {
function content_5bec4ad5d843d8_20749682 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\block.form.php';
if (!is_callable('smarty_function_hidden')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.hidden.php';
if (!is_callable('smarty_function_tools_barstandard')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tools_barstandard.php';
if (!is_callable('smarty_function_consult_table_referenciasp')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.consult_table_referenciasp.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171875bec4ad5d82ef0_00272742', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Form_default_gestion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_171875bec4ad5d82ef0_00272742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
    <section class="content-wrapper">
        <br>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"Form_prove",'method'=>"GET"));
$_block_repeat1=true;
echo smarty_block_form(array('name'=>"Form_prove",'method'=>"GET"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

                <?php echo smarty_function_hidden(array('name'=>"action",'value'=>''),$_smarty_tpl);?>
   
                <div class="row">
                    <div class="container"> 
                        <nav>
                            <div class="nav-wrapper">
                                <div class="input-field">
                                    <input id="search" type="search" required>
                                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </div>
                        </nav>
                        <br>
                
                        <?php echo smarty_function_tools_barstandard(array('type'=>"Button",'form_name'=>"Form_prove",'commands'=>"CmdShowByIdProveedor,CmdDeleteProveedor,CmdCrearProve",'icon_class'=>"fa-pencil-square-o,fa-trash,fa-trash",'btn_class'=>"waves-effect waves-light btn modal-trigger,btn-info,btn-danger,waves-effect waves-light btn modal-trigger",'labels'=>"edit,del,new",'id'=>"updateprov,deleteprov,createprove"),$_smarty_tpl);?>
    
                
                
                        <?php echo smarty_function_consult_table_referenciasp(array('table_name'=>"mco_proveedores",'llaves'=>"PVE_ID",'DataGateway'=>"Mco_proveedores",'form_name'=>"Form_prove",'type'=>"LIST",'titulos'=>".,PVE_ID,PVE_NOMBRE,PVE_DIRECCION,PVE_TELEFONO,PVE_CELULAR,PVE_EMAIL",'title'=>"Proveedores",'command_showbyid'=>"CmdShowByIdProveedores",'commands'=>"CmdShowListProveedores"),$_smarty_tpl);?>

                    </div>
                </div>
            <?php $_block_repeat1=false;
echo smarty_block_form(array('name'=>"Form_prove",'method'=>"GET"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
 
        <br>
    </section>
<?php
}
}
/* {/block "content"} */
}
