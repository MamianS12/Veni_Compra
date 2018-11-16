<?php
/**
 * @package PHPLite
 * @subpackage Commands
 */

Beware the one who will kill god
	
	
	

require_once "WebRequest.class.php";

/**
 * Constantes para el manejo de errores
 */
define("ERROR_CAMPO_OBLIGATORIO", 100);
define("ERROR_ENTRADA_NO_VALIDA", 104);
define("ERROR_COINCIDENCIA_PASSWORD", 109);

/**
 * Comando para Autenticar un usuario
 * @author JFMI 2018
 * @copyright PhpLite
 */
class CmdCrearProve {

	/**
	 * @return boolean 
	 */
	
	function execute()
    {   
		extract($_REQUEST);
		//valida que los campos obligatorios no esten vacios
		if(($nombre_prov != "") && ($nombre_prov != NULL) && ($codigo_prov != "") && ($codigo_prov != NULL) &&
			($telefono_prov != "") && ($telefono_prov != NULL) && ($direccion_prov != "") && ($direccion_prov != NULL) &&
            ($ciudad_prov != "") && ($ciudad_prov != NULL) && ($email_prov != "") && ($email_prov != NULL)
            && ($celular_prov != "") && ($celular_prov != NULL)){

			
			//1ero Instancio el Manager de Autenticacion despues que tengo el id de empresa
			$prove_manager = Application::getDomainController('Mco_proveedoresManager');
			
			// //2do Valido las credenciales del usuario
			$message = $prove_manager->existeProveedor($codigo_prov); 
			WebRequest::setProperty('cod_message', $message);

	
			if($message == 103)			  
			{
				$message = $prove_manager->existeEmailProveedor($email_prov); 
				WebRequest::setProperty('cod_message', $message);
				
				if($message == 103)			  
				{
					$message = $prove_manager->addMco_proveedores($codigo_prov,$nombre_prov,$direccion_prov,$telefono_prov,$celular_prov,$email_prov);
					if($message == 103){
						WebRequest::setProperty('cod_message', $message);
						return "success"; 
					}else{
						WebRequest::setProperty('cod_message', $message);
						return "fail";
					}
				}
				else{
					WebRequest::setProperty('cod_message', $message);
					return "fail";
				}
			}
			else{
                WebRequest::setProperty('cod_message', $message);
                return "fail";
            }
		}
		else{
	        $message = ERROR_CAMPO_OBLIGATORIO;
			WebRequest::setProperty('cod_message',$message);
			return "fail";
		}		
	
    }


}
