<?php
/* Smarty version 3.1.30, created on 2018-11-14 17:18:28
  from "C:\xampp\htdocs\LittlePHP_VENI_COMPRA\LitlePHP\applications\veni_compra\web\html\Form_crear_proveedor.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bec4ad438c996_30485220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7954be78bf150f4f12de72f3cd6873c91cc5dd8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\html\\Form_crear_proveedor.tpl',
      1 => 1542212305,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Form_default_gestion.tpl' => 1,
  ),
),false)) {
function content_5bec4ad438c996_30485220 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_block_form')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\block.form.php';
if (!is_callable('smarty_function_hidden')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.hidden.php';
if (!is_callable('smarty_function_tools_barstandard')) require_once 'C:\\xampp\\htdocs\\LittlePHP_VENI_COMPRA\\LitlePHP\\applications\\veni_compra\\web\\plugins\\function.tools_barstandard.php';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_33155bec4ad438b018_12150706', "content");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:Form_default_gestion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "content"} */
class Block_33155bec4ad438b018_12150706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section class="content-wrapper container">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('form', array('name'=>"Form_crear_prove",'method'=>"POST"));
$_block_repeat1=true;
echo smarty_block_form(array('name'=>"Form_crear_prove",'method'=>"POST"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>

          <?php echo smarty_function_hidden(array('name'=>"action",'value'=>''),$_smarty_tpl);?>
  
          <div class="input-field">
            <input type="number" id="codigo_prov" name="codigo_prov" />
            <label for="codigo_prov">Codigo</label>
          </div>
          <div class="input-field">
            <input type="text" id="proveedor_prov" name="nombre_prov"/>
            <label for="proveedor_prov">Nombre proveedor</label>
          </div>
          <div class="input-field">
            <input type="text" id="telefono_prov" name="telefono_prov"/>
            <label for="telefono_prov">Telefono</label>
          </div>
          <div class="input-field">
            <input type="text" id="celular_prov" name="celular_prov"/>
            <label for="celular_prov">Celular</label>
          </div>
          <div class="input-field">
            <input type="text" id="direccion_prov" name="direccion_prov"/>
            <label for="direccion_prov">Direccion</label>
          </div>
          <div class="input-field">
            <input type="text" id="ciudad_prov" name="ciudad_prov"/>
            <label for="ciudad_prov">Ciudad</label>
          </div>
          <div class="input-field">
            <input type="email" id="email_prov" name="email_prov"/>
            <label for="email_prov">Correo</label>
          </div>
          <?php echo smarty_function_tools_barstandard(array('type'=>"Button",'form_name'=>"Form_crear_prove",'commands'=>"CmdDefaultProv",'btn_class'=>"btn right",'labels'=>"crear_prov"),$_smarty_tpl);?>
 
          <br><br><br>
        <?php $_block_repeat1=false;
echo smarty_block_form(array('name'=>"Form_crear_prove",'method'=>"POST"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    </section>
<?php
}
}
/* {/block "content"} */
}
