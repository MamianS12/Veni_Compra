<?php
/**
 * Smarty plugin
 */
/**
 * Smarty {btn_command} plugin
 * Type:     function<br>
 * Name:     btn_command<br>
 * Purpose:  crea un boton<br>
 * Input:<br>
 *           name = name of btn_command (optional)
 *           id = id of btn_command (optional)
 *           type = define the type of the btn_command ('button'|'submit')(required)
 *           disabled = disable the btn_command (optional)
 *           onClick = To introduce code javascript (optional)
 *           value = define the label of the btn_command (optional)
 *           form_name = nombre de la forma que contiene el btn_command
 *           btn_class = Clase del Boton
 *           icon_class = Clase para mostrar imagen en el boton
 *           
 *<pre>
 * Examples : {tools_ancla  reference_id =100 
                        li_class="seresCmdAddWp_commentmeta,seresCmdShowListWp_commentmeta,seresCmdHelpWp_commentmeta"
                        href="fa-check,fa-reply,fa-ambulance" 
                        icon_class = "iconos"
						labels ="btn-success,btn-warning,btn-mint" 
              }
 *            {btn_command type="submit" value="Adicionar" name="CmdAddPais" onClick="alert('click al submit');"}
 *</pre>
 *
 * @author   Joseé Fernando Mendoza <fmendoza06@gmail.com>
 * @version  1.0.0
 * @param array
 * @param Smarty
 * @return string
 * @copyright Spyro Softlutions - 02-Jul-2015 
 */

function smarty_function_tools_ancla($params, &$smarty)
{
    
    extract($params);
    require Application::getLanguageDirectory().'/'.Application::getLanguage()."/Toolsbar.lan";

    if(isset($li_class)){
        $li_class = explode(",",$li_class);
    } else {
        $li_class = $v;
    }
    
    if(!isset($ul_class)){
        $ul_class = "tabs";
    } 
    
    if(isset($icon_class)){
        $icon_class = explode(",",$icon_class);
    } else {
        $icon_class = $v;
    }	


    if(isset($href)){
        $href = explode(",",$href);
    } else {
        $href = $v;
    }

    if(isset($labels)){
        $labels = explode(",",$labels);
    } else {
        $labels = $v;
    }

    if(isset($id)){
        $id = explode(",",$id);
    } else {
        $id = $v;
    }

   $html_result = "<ul class='$ul_class'>";

    for($i=0;$i < count($labels);$i++)
    {
        // print_r(count($labels));
        CrearAncla($html_result,$params,$icon_class[$i],$li_class[$i],$href[$i],$Toolsbar[$labels[$i]],$id[$i]); 
    }
					
    $html_result .= '</ul>';

    

    print $html_result;


}

function CrearAncla(&$html_result,$params,$icon_class,$li_class,$href,$label,$id){
    
    $html_result .= "<li id='$id' class='$li_class'><a href='$href'>$label'</a></li>";
    
}
?>