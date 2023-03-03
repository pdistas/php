<?php

/* dessa forma eu posso digitiar Exemplo3.php?ra=1 que funciona ok, mas seu eu quiser ver tudo da tabela,
posso fazer Exemplo3.php?ra=1 or 1=1 -- (o -- espaco, ignora qq comando sql vindo depois)
*/
$ra = (isset($_GET["ra"]))? $_GET["ra"] : 1; // se executar sem passar ra na url, assumirá ra = 1

/*para evitar sqlinjection, posso verificar se o parâmetro é numérico, posso verificar o tamanho o parametro.
Mas o ideal é colocar "" no sql e usar pdo e bind */
/*if (!is_numeric($ra) || strlen($ra) > 3) {
    exit("Pegamos você!");
}*/

$conn = mysqli_connect("localhost", "root", "", "simone"); //host, user, pw, bd

$sql = "select * from alunos where ra = $ra";

//assim com '' é seguro, pq o parametro ficaria ra = '1 or 1=1', não sendo encontrado registro válido
//$sql = "select * from alunos where ra = '$ra'";

$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    echo $resultado->ra . " - " . $resultado->nome . " - " . $resultado->curso . "<br>";
}