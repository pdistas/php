<?php

  $v_numero = $_GET['numero'];

  $varArray = array(8,3,4,6,2,7,1,0);

  if ( in_array($v_numero, $varArray) ) {
  	echo "<span style='color:green;font-weight:bold;'>Acertou!</span>";
  } else {
  	echo "<span style='color:red;font-weight:bold;'>Errou! Tente e novo!</span>";
  }

  echo "<br><br>";
  echo "<small><a href='exerc1-array.php'>Tentar novamente</a></small>";