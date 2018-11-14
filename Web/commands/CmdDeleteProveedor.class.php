<?php
/**
 * @package PHPLite
 * @subpackage Commands
 */

require_once "WebRequest.class.php";

/**
 * Constantes para el manejo de errores
 */
define("ERROR_ENTRADA_NO_VALIDA", 104);
define("ERROR_NO_PROVEEDOR",107);

/**
 * Comando para Eliminar Pproveedor
 * @author JFMI 2018
 * @copyright PhpLite
 */
class CmdDeleteProveedor {

	/**
	 * @return boolean 
	 */
	
	function execute()
    {   
		extract($_REQUEST);
        
        
        if($mco_proveedores__PVE_ID != '' && $mco_proveedores__PVE_ID != NULL){
            $prove_manager = Application::getDomainController('Mco_proveedoresManager');

            $message = $prove_manager->deleteMco_proveedores($mco_proveedores__PVE_ID); 
            WebRequest::setProperty('cod_message', $message);
            
            if($message == 103){
                WebRequest::setProperty('cod_message', $message);
				return "success"; 
            }else{
                WebRequest::setProperty('cod_message', $message);
				return "fail";
            }
        }else{
            $message = ERROR_NO_PROVEEDOR;
			WebRequest::setProperty('cod_message',$message);
			return "fail";
        }
	
    }


}