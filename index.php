<?php

/**
* index.php
*
* standalone receiver
* freestanding code to load the FrontController
* requires the "config.inc.php"
* Implment de Listener Pathern
*/
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
require_once "config/config.inc.php";
require_once "LitlePHP.class.php";
require_once "FrontController.class.php";


FrontController::execute();


?>


