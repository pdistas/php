<?php

  $op = $_GET["op"];
  echo "Operação: " . $op;  
  echo "<hr>"; 


  $ra = $_POST["ra"];
  $nome = $_POST["nome"];
  $curso = $_POST["curso"];

  echo $ra;
  echo "<br>";

  echo $nome;
  echo "<br>";
  
  echo $curso;
  echo "<br>";  

  if ($op == "save") {

  	echo "salvando ...";

  } else if (op == "del") {

  }

  ?>