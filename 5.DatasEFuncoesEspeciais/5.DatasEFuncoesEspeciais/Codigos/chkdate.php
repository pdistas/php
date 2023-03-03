<?php

	if(checkdate(02, 20, 2022)) // Resultado: true
		echo "Data válida!<br>";
	else
		echo "Data inválida!<br>";

	if(checkdate(02, 30, 2022)) // Resultado: false
		echo "Data válida!<br>";
	else
		echo "Data inválida!<br>";
