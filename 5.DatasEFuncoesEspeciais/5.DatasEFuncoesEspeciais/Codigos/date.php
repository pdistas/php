<?php

  	/*
  	$agora = time();
  	echo $agora;
  	*/

  	date_default_timezone_set("America/Sao_Paulo");

	echo date("Y-m-d H:i:s", time()); 
	echo "<br>";
	echo date("Y-m-d", time()); 
	echo "<br>";
	echo date("D");
	echo "<br>";
	echo date("l");
	echo "<br>";
	echo date("F");