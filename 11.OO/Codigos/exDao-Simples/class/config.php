<?php

//autoload das classes armazenadas na pasta "class"
spl_autoload_register(function($nameClass) {
	$fileName = $nameClass . ".php";

   if (file_exists($fileName)) {
       require_once($fileName);
   }
});

?>