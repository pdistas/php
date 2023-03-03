<?php

    setcookie("InfoUser-Nome", 0, time()-3600, "/");
    setcookie("InfoUser-Idade", 0, time()-3600, "/");
    setcookie("InfoUser-Cor", 0, time()-3600, "/");
    setcookie("InfoUser-contaVisitas", 0, time()-3600, "/");
    // Resultado: zera os valores e seta a data para expirar para 1 dia atras...

?>