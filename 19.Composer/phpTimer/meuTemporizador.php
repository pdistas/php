<?php

	/*
	Temporizador PHP, para os desenvolvedores que querem descobrir quanto tempo um pedaço de código específico leva para executar. Útil para fins de depuração e otimização.
	*/

	require __DIR__ . '/vendor/autoload.php';

	use SebastianBergmann\Timer\Timer;

	$timer = new Timer;

	$timer->start();

	//início conexão com BD
    try {                      
        $pdo = new PDO('mysql:host=localhost;dbname=simone;charset=utf8', 'root', '');     
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $output = 'Conexão estabelecida. <br><br>';
    } catch (PDOException $e) {
        $output = 'Impossível conectar BD: ' . $e . '<br><br>';
    }
    echo $output;
    //fim conexão com BD

	$duration = $timer->stop();

	echo "Tempo para a conexão com o BD: " . $duration;

?>