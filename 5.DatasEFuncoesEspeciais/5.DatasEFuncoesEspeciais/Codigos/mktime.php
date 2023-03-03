<?php

//hora, minuto, second, mes, dia, ano

echo mktime(12, 00, 00, 02, 20, 2022),"<br>";
// Resultado: 1645354800

echo date("d-m-Y H:i:s", mktime(12, 00, 00, 02, 20, 2022));
// Resultado 20-02-2022 12:00:00

echo "<br><br>";

//a data informada poderia ter sido lida de um form, por ex
$dt = mktime("12", "00", "00", "02", "20", "2022");
echo date("d-m-Y H:i:s", strtotime("+ 7 day", $dt)),"<br>";