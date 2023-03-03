<?php

//as datas informadas em mktime poderiam ter sido lidas via form
$data1 = mktime(0, 0, 0, 10, 10, 2005 );
$data2 = mktime(0, 0, 0, 10, 10, 2022);
$difSeconds = ($data2 - $data1);
echo "Diferença em segundos: ".$difSeconds,"<br>";
// Resultado: Diferença em segundos: 536457600

$difMinutes= ($data2 - $data1) / 60;
echo "Diferença em minutos: ".$difMinutes,"<br>";
// Resultado: Diferença em minutos: 8940960

$difHours = ($data2 - $data1) / 60 / 60;
echo "Diferença em horas: ".$difHours,"<br>";
// Resultado: Diferença em horas: 149016

$difDays = ($data2 - $data1) / 60 / 60 / 24;
echo "Diferença em dias: ".$difDays,"<br>";
// Resultado: Diferença em dias: 6209

$difMonths = ($data2 - $data1) / 60 / 60 / 24 / 30;
echo "Diferença em meses: ".$difMonths,"<br>";
// Resultado: Diferença em Meses: 206.96666666667	

$difYears = ($data2 - $data1) / 60 / 60 / 24 / 30 / 12;
echo "Diferença em anos: ". round($difYears, 0),"<br>";
// Resultado: Diferença em Anos: 17