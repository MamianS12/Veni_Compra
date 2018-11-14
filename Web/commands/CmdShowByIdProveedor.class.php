<?php
/**
 * @package PHPLite
 * @subpackage Commands
 */

require_once "WebRequest.class.php";

/**
 * Constantes para el manejo de errores
 */
define("COMPLETADO", 103);
define("ERROR_ENTRADA_NO_VALIDA", 104);
define("ERROR_NO_PROVEEDOR",107);
define("ERROR_PROVEEDOR", 108);

/**
 * Comando para Eliminar Pproveedor
 * @author JFMI 2018
 * @copyright PhpLite
 */
class CmdShowByIdProveedor {

	/**
	 * @return boolean 
	 */
	
	function execute()
    {   
		extract($_REQUEST);
        
        
        if($mco_proveedores__PVE_ID != '' && $mco_proveedores__PVE_ID != NULL && $mco_proveedores__PVE_ID != '#'){
            $prove_manager = Application::getDomainController('Mco_proveedoresManager');

            $proveedor = $prove_manager->getByIdMco_proveedores($mco_proveedores__PVE_ID); 
            WebRequest::setProperty('cod_message', $message);
            
            if($proveedor != NULL){
                
                $json = json_encode($proveedor);
              echo '<script>
                manageData($json);
              </script>';
              print_r($json); 
                

                // return $proveedor;
                return "success"; 
            }else{
                $message = ERROR_PROVEEDOR;
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